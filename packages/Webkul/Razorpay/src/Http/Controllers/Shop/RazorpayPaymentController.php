<?php

namespace Webkul\Razorpay\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Razorpay\Api\Api;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Webkul\Checkout\Facades\Cart;
use Webkul\Razorpay\Repositories\RazorpayEventRepository;
use Webkul\Razorpay\Repositories\RazorpayMerchantRepository;
use Webkul\Sales\Models\OrderPayment as OrderPayment;
use Webkul\Sales\Repositories\InvoiceRepository;
use Webkul\Sales\Repositories\OrderRepository;
use Webkul\Sales\Transformers\OrderResource;

class RazorpayPaymentController extends Controller
{
    /**
     * @var string
     */
    public const PENDING_PAYMENT_UP = 'Pending Payment';

    /**
     * @var string
     */
    public const PENDING_PAYMENT = 'pending_payment';

    /**
     * @var string
     */
    public const PAID_UP = 'Paid';

    /**
     * @var string
     */
    public const PROCESSING = 'processing';

    /**
     * @var string
     */
    public const PAID = 'paid';

    /**
     * @var string
     */
    public const CAPTURED = 'captured';

    /**
     * @var string
     */
    public const CANCELED_PAYMENT = 'Canceled Payment';

    /**
     * @var string
     */
    public const CANCELED = 'canceled';

    /**
     * @var int
     */
    public const ONE = 1;

    /**
     * @return void
     */
    public function __construct(
        protected InvoiceRepository $invoiceRepository,
        protected OrderRepository $orderRepository,
        protected RazorpayEventRepository $razorpayEventRepository,
        protected RazorpayMerchantRepository $razorpayMerchantRepository,
    ) {
    }

    /**
     * Redirects to checkout.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()
    {
        $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_id');

        $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_secret');

        if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
            $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_id');

            $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_secret');
        }
        
        $merchant = $this->razorpayMerchantRepository->first();

        if (! $merchant) {
            session()->flash('error', trans('razorpay::app.admin.razorpay.response.token-expired'));
            
            return redirect()->back();
        }

        if (
            $clientId
            && $clientSecret
        ) {
            try {
                $cart = Cart::getCart();
                
                $cartAmount = $cart->base_grand_total;
                
                $cartId = $cart->id;

                $razorpayMerchant = DB::table('razorpay_merchant_details')->first();

                $accessToken = $razorpayMerchant->access_token;

                $orderAPI = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $accessToken,
                    'Content-Type'  => 'application/json',
                ])->post('https://api.razorpay.com/v1/orders', [
                    'amount'   => (int) round($cartAmount * 100), 
                    'currency' => 'INR', 
                    'receipt'  => 'receipt_'. $cartId, 
                    'notes'    => [
                        'name'        => core()->getConfigData('sales.payment_methods.razorpay.merchant_name') ?? 'Guest',
                        'description' => core()->getConfigData('sales.payment_methods.razorpay.merchant_desc') ?? 'Description',
                    ],
                ]);

                \Log::info($orderAPI->json());

                if ($orderAPI->failed()) {
                    \Log::error('Error: ' . $orderAPI->json());

                    return redirect()->back();
                }

                if ($orderAPI->successful()) {
                    $orderAPI = $orderAPI->json();
                }
                
                $pgOrderId = $orderAPI['id'];

                $payment = [
                    'key'         => $razorpayMerchant->public_token,
                    'amount'      => $cart->base_grand_total * 100,
                    'name'        => core()->getConfigData('sales.payment_methods.razorpay.merchant_name'),
                    'description' => core()->getConfigData('sales.payment_methods.razorpay.merchant_desc'),
                    'image'       => bagisto_asset('images/logo.svg', 'admin'),
                    'order_id'    => $pgOrderId,
                    'prefill'     => [
                        'name'    => $cart->billing_address->name,
                        'email'   => $cart->billing_address->email,
                        'contact' => $cart->billing_address->phone,
                    ],
                    'notes'       => [
                        'shipping_address' => $cart->billing_address->address1,
                    ],
                ];

                $data = (new OrderResource($cart))->jsonSerialize();

                $order = $this->orderRepository->create($data);

                $order = $this->orderRepository->findOneWhere([
                    'cart_id' => Cart::getCart()->id,
                ]);

                $orderPayment = OrderPayment::where('order_id', $order->id)->firstOrFail();

                $additional = [];

                $additional['status'] = self::PENDING_PAYMENT_UP;
                $additional['oid'] = $pgOrderId;
                $additional['pgReference'] = '';

                $orderPayment->additional = $additional;
                $orderPayment->save();

                $this->orderRepository->update(['status' => 'pending_payment'], $order->id);

                $paymentEvents = $this->razorpayEventRepository->create([
                    'core_order_id'           => $order->id,
                    'razorpay_order_id'       => $pgOrderId,
                    'razorpay_invoice_status' => self::PENDING_PAYMENT,
                ]);

                \Log::info($payment);

                return view('razorpay::shop.checkout.payment.drop-in-ui', compact('payment'));
            } catch(\Exception $e){
                \Log::error('Error: ' . $e->getMessage());
            }
        } else {
           return redirect()->back();
        }
    }

    /**
     * Payment Success
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function paymentSuccess(Request $request)
    {
        $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_id');

        $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_secret');


        if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
            $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_id');

            $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_secret');
        }

        if (isset($request['error'])) {
            $additional = [];
            
            $order = $this->orderRepository->orderBy('created_at', 'desc')->first();
            
            $pgUpdated = OrderPayment::where('order_id', $order->id)->firstOrFail();

            $additional['status'] = $request['error']['description'];
            $pgUpdated->additional = $additional;
            $pgUpdated->save();

            $rzp = $this->razorpayEventRepository->where('core_order_id', $order->id)->first();
            $rzp->razorpay_invoice_status = 'error';
            $rzp->save();

            $this->orderRepository->update(['status' => self::PENDING_PAYMENT], $order->id);

            session()->flash('error', $request['error']['description']);

            session()->flash('order_id', $order->id);

            return redirect()->route('shop.checkout.onepage.success');
        } else {
            $oId = $request['razorpay_order_id'];

            $order = $this->orderRepository->orderBy('created_at', 'desc')->first();

            $razorpayMerchant = DB::table('razorpay_merchant_details')->first();

            $accessToken = $razorpayMerchant->access_token;

            $payments = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type'  => 'application/json',
            ])->get('https://api.razorpay.com/v1/payments');

            if ($payments->failed()) {
                \Log::error('Error: ' . $payments->json());

                session()->flash('error', trans('Something is not right, for security reasons the transaction can\'t be processed.'));

                return redirect()->route('shop.checkout.cart.index');
            }

            if ($payments->successful()) {
                $payments = $payments->json();
            }
                
            if ($payments) {
                $filteredPayments = array_filter($payments['items'], function ($payment) use ($oId) {
                    return isset($payment['order_id']) && $payment['order_id'] === $oId;
                });
            
                $filteredPayments = array_values($filteredPayments);

                $razorpayPaymentDetails = $filteredPayments['0'];
            }
            
            $expectedSignature = $request['razorpay_order_id'] . '|' . $request['razorpay_payment_id'];

            $generatedSignature = hash_hmac('sha256', $expectedSignature, $clientSecret);

            if ($generatedSignature !== $request['razorpay_signature']) {
                session()->flash('error', trans('Something is not right, for security reasons the transaction can\'t be processed.'));

                return redirect()->route('shop.checkout.cart.index');
            }

            $paymentDetails = OrderPayment::where('order_id', $order->id)->firstOrFail();

            $additionalData = [
                'status'      => self::PAID_UP,
                'orderId'     => $request['razorpay_order_id'],
                'pgReference' => $request['razorpay_payment_id'],
            ];

            $paymentDetails->additional = $additionalData;
            $paymentDetails->save();

            $this->orderRepository->update(['status' => self::PROCESSING], $order->id);

            $this->invoiceRepository->create($this->prepareInvoiceData($order->id));

            $razorpayEvent = $this->razorpayEventRepository->where('razorpay_order_id', $request['razorpay_order_id'])->first();
            $razorpayEvent->razorpay_payment_id = $razorpayPaymentDetails['id'];
            $razorpayEvent->razorpay_invoice_status = $razorpayPaymentDetails['status'];
            $razorpayEvent->razorpay_signature = $request['razorpay_signature'];
            $razorpayEvent->additional = json_encode((array) $razorpayPaymentDetails);
            $razorpayEvent->update();

            Cart::deActivateCart();

            session()->flash('order_id', $order->id);

            return redirect()->route('shop.checkout.onepage.success');
        }
    }

    /**
     * Perform the transaction
     *
     * @param \Illuminate\Http\Request $request
     * @return response
     */
    public function verifyPaymentHook(Request $request)
    {
        $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_secret');

        if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
            $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_secret');
        }

        $eventId = $request->header('x-razorpay-event-id');

        $webhookSignature = $request->header('x-razorpay-signature');

        $webhookBody = json_decode($request->getContent());

        $generatedSignature = hash_hmac('sha256',$request->getContent(), $clientSecret);

        try {
            if ($generatedSignature == $webhookSignature){
                $payments = $this->razorpayEventRepository->where('razorpay_event_id', $eventId)->get();

                if (! empty($payments->count())) {
                    $paymentId = $webhookBody->payload->payment->entity->id;

                    $order_id =  $webhookBody->payload->payment->entity->order_id;

                    $invoice_id = $webhookBody->payload->payment->entity->invoice_id;

                    $pgStatus = $webhookBody->payload->payment->entity->status;
            
                    $razorData = false;

                    if ($invoice_id) {
                        $razorData = $this->razorpayEventRepository->where('razorpay_invoice_id',$invoice_id)->first();
                    } elseif ($order_id) {
                        $razorData = $this->razorpayEventRepository->where('razorpay_order_id', $order_id)->first();
                    }
            
                    if($razorData) {
                        $razorId = $razorData->id;
            
                        if (
                            $pgStatus == self::CAPTURED 
                            || $pgStatus == self::PAID
                        ) {
                            $this->razorpayEventRepository->update([
                                'razorpay_event_id'       => $eventId,
                                'razorpay_invoice_id'     => $invoice_id,
                                'razorpay_payment_id'     => $paymentId,
                                'razorpay_invoice_status' => self::PAID,
                                'razorpay_signature'      => $webhookSignature,
                            ], $razorId);
            
                            $orderPayment = OrderPayment::where('order_id', $razorData->core_order_id)->firstOrFail();
            
                            if(
                                ! empty($orderPayment)  
                                && strtolower($orderPayment->additional['status']) != self::PAID
                            ) {
                                $orderPayment->additional = [
                                    'status'      => self::PAID_UP,
                                    'oid'         => $order_id,
                                    'pgReference' => $paymentId,
                                ];

                                $orderPayment->save();

                                $this->orderRepository->update(['status' => self::PROCESSING], $razorData->core_order_id);

                                $this->invoiceRepository->create($this->prepareInvoiceData($razorData->core_order_id));
                            }
                        }
                    }
            
                }
            }
        } catch(\Exception $e){
            \Log::error('Error: '.$e->getMessage());
        }

        return true;
    }

    /**
     * payment failed
     * 
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function paymentFail()
    {
        session()->flash('error', trans('razorpay::app.response.razorpay-cancelled'));

        return redirect()->route('shop.checkout.cart.index');
    }

    /**
     * Prepares order's invoice data for creation
     *
     * @param mixed $oId
     * @return array
     */
    protected function prepareInvoiceData($oId = null)
    {
        try {
            if ($oId) {
                $invoiceData = ['order_id' => $oId];

                $order = $this->orderRepository->findOrFail($oId);

                foreach ($order->items as $item) {
                    $invoiceData['invoice']['items'][$item->id] = $item->qty_to_invoice;
                }
            } else {
                $order = $this->orderRepository->orderBy('created_at', 'desc')->first();

                $invoiceData = ['order_id' => $order->id];

                foreach ($order->items as $item) {
                    $invoiceData['invoice']['items'][$item->id] = $item->qty_to_invoice;
                }
            }
        } catch(\Exception $e){
            \Log::error('Error: '.$e->getMessage());
        }

        return $invoiceData;
    }

    /**
     * Check if the OAuth token is still valid
     *
     * @param mixed $merchant
     * @return bool
     */
    protected function isTokenValidX($merchant)
    {
        if (! $merchant) {
            return false;
        }

        $tokenExpiration = $merchant->expires_in;

        $currentTime = time();

        $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_id');

        $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_secret');

        if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
            $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_id');

            $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_secret');
        }

        if ($tokenExpiration <= $currentTime + 300) {
            try {
                $response = Http::asForm()->post('https://auth.razorpay.com/token', [
                    'grant_type'    => 'refresh_token',
                    'refresh_token' => $merchant->refresh_token,
                    'client_id'     => $clientId,
                    'client_secret' => $clientSecret,
                ]);

                if ($response->successful()) {
                    $tokenData = $response->json();

                    $this->razorpayMerchantRepository->updateOrCreate(
                        [
                            'razorpay_account_id' => $tokenData['razorpay_account_id'],
                        ], [
                            'access_token'  => $tokenData['access_token'],
                            'refresh_token' => $tokenData['refresh_token'],
                            'expires_in'    => $tokenData['expires_in'],
                        ],
                    );

                    return true;
                }

                return false;
            } catch (\Exception $e) {
                \Log::error('Token Refresh Error: ' . $e->getMessage());

                return false;
            }
        }

        return true;
    }
}