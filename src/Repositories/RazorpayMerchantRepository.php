<?php

namespace Webkul\Razorpay\Repositories;

use Webkul\Core\Eloquent\Repository;
use Webkul\Razorpay\Contracts\RazorpayMerchantDetails;

class RazorpayMerchantRepository extends Repository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return RazorpayMerchantDetails::class;
    }
}