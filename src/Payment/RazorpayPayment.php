<?php

namespace Webkul\Razorpay\Payment;

use Illuminate\Support\Facades\Storage;
use Webkul\Payment\Payment\Payment;

class RazorpayPayment extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code = 'razorpay';

    /**
     * @return string — The redirect URL.
     */
    public function getRedirectUrl()
    {
        return route('razorpay.payment.redirect');
    }

    /**
     * Returns payment method image
     *
     * @return array
     */
    public function getImage()
    {
        $url = $this->getConfigData('image');

        return $url ? Storage::url($url) : asset('../packages/Webkul/Razorpay/src/Resources/assets/images/razorpay.png');
    }

    /**
     * @return string — The redirect method.
     */
    public function getFormView()
    {
        return 'razorpay_oauth::payment.form';
    }
}