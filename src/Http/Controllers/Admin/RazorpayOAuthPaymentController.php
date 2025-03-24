<?php

namespace Webkul\Razorpay\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Webkul\Razorpay\Repositories\RazorpayMerchantRepository;

class RazorpayOAuthPaymentController extends Controller
{
    /**
     * @var string
     */
    public const AUTHORIZATION_CODE = 'authorization_code';
    
    /**
     * @var string
     */
    public const REFRESH_TOKEN = 'refresh_token';

    /**
     * @return void
     */
    public function __construct(
        protected RazorpayMerchantRepository $razorpayMerchantRepository,
    ) {
    }

    /**
     * Display the Razorpay OAuth Index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('razorpay::admin.razorpay.index');
    }

    /**
     * Redirects to Razorpay OAuth.
     *
     * @return \Illuminate\Http\Response
     */
    public function connect()
    {
        try {
            $clientIdTestOAuth = request('oauth_client_id');
    
            if (! $clientIdTestOAuth) {
                throw new \Exception(trans('razorpay::app.admin.razorpay.response.client-id-missing'));
            }

            $redirectUrlOAuth = route('admin.razorpay.callback');

            $authUrl = "https://auth.razorpay.com/authorize?response_type=code&client_id=".$clientIdTestOAuth."&redirect_uri=".$redirectUrlOAuth."&scope=read_write&state=NOBYtv8r6c75ex6WZ";

            return redirect($authUrl);
        } catch (\Exception $e) {
            \Log::error('Razorpay OAuth Connect Error: ' . $e->getMessage());
            
            session()->flash('error', $e->getMessage());
            
            return redirect()->back();
        }
    }

    /**
     * Callback function after Razorpay OAuth.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback(Request $request)
    {
        $code = $request->query('code');

        $error = $request->query('error');

        $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_id');

        $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_secret');

        if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
            $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_id');

            $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_secret');
        }

        if ($error) {
            \Log::error('Razorpay OAuth Error', ['error' => $error]);

            session()->flash('error', $error);

            return redirect()->route('admin.razorpay.index');
        }
    
        if (! $code) {
            session()->flash('error', trans('razorpay::app.admin.razorpay.response.no-auth-received'));

            return redirect()->route('admin.razorpay.index');
        }
    
        if (
            ! $clientId 
            || ! $clientSecret
        ) {
            session()->flash('error', trans('razorpay::app.admin.razorpay.response.not-configured'));

            return redirect()->route('admin.razorpay.index');
        }

        try {
            $redirectUri = route('admin.razorpay.callback', [], true);

            $payload = [
                'client_id'     => $clientId,
                'client_secret' => $clientSecret,
                'grant_type'    => self::AUTHORIZATION_CODE,
                'redirect_uri'  => $redirectUri,
                'code'          => $code,
            ];

            if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
                $payload['mode'] = 'test';
            }
            
            \Log::info($payload);
            
            $response = Http::asForm()->post('https://auth.razorpay.com/token', $payload);

            \Log::info($response->json());

            if ($response->successful()) {
                $tokenData = $response->json();

                $data = $this->razorpayMerchantRepository->updateOrCreate(
                    [
                        'razorpay_account_id' => $tokenData['razorpay_account_id']
                    ], [
                        'public_token'  => $tokenData['public_token'],
                        'token_type'    => $tokenData['token_type'],
                        'access_token'  => $tokenData['access_token'],
                        'refresh_token' => $tokenData['refresh_token'],
                        'expires_in'    => $tokenData['expires_in'],
                    ],
                );
                
                \Log::info($data);

                session()->flash('success', trans('razorpay::app.admin.razorpay.response.oauth-connected'));

                return redirect()->route('admin.razorpay.index');
            }
    
            $errorResponse = $response->json();

            \Log::error('Razorpay Token Exchange Failed', $errorResponse);

            session()->flash('error', $errorResponse['message'] ?? trans('razorpay::app.admin.razorpay.response.token-failed'));
            
            return redirect()->route('admin.razorpay.index');
        } catch (\Exception $e) {
            \Log::error('Razorpay OAuth Exception', [
                'message' => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);
    
            session()->flash('error', trans('razorpay::app.admin.razorpay.response.unexpected-error'). $e->getMessage());

            return redirect()->route('admin.razorpay.index');
        }
    }

    /**
     * Process the payment.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function refreshToken()
    {
        $merchant = $this->razorpayMerchantRepository->first();

        $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_id');

        $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_secret');

        if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
            $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_id');

            $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_secret');
        }

        if (! $merchant) {
            session()->flash('error', trans('razorpay::app.admin.razorpay.response.setup-razorpay'));

            return redirect()->route('admin.razorpay.index');
        }

        $payload = [
            'grant_type'    => self::REFRESH_TOKEN,
            'refresh_token' => $merchant->refresh_token,
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
        ];
        
        if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
            $payload['mode'] = 'test';
        }
        
        $response = Http::asForm()->post('https://auth.razorpay.com/token', $payload);
        
        if ($response->successful()) {
            $tokenData = $response->json();

            $this->razorpayMerchantRepository->updateOrCreate(
                [
                    'razorpay_account_id' => $tokenData['razorpay_account_id'],
                ], [
                    'public_token'  => $tokenData['public_token'],
                    'access_token'  => $tokenData['access_token'],
                    'refresh_token' => $tokenData['refresh_token'],
                    'expires_in'    => $tokenData['expires_in'],
                ],
            );

            session()->flash('success', trans('razorpay::app.admin.razorpay.response.token-refreshed'));

            return redirect()->route('admin.razorpay.index');
        }

        session()->flash('error', $response->json());

        return redirect()->route('admin.razorpay.index');
    }
}