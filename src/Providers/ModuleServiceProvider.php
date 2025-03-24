<?php

namespace Webkul\Razorpay\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webkul\Razorpay\Models\RazorpayEvents::class,
        \Webkul\Razorpay\Models\RazorpayMerchantDetails::class,
    ];
}