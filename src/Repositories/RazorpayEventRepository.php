<?php

namespace Webkul\Razorpay\Repositories;

use Webkul\Core\Eloquent\Repository;
use Webkul\Razorpay\Contracts\RazorpayEvents;

class RazorpayEventRepository extends Repository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return RazorpayEvents::class;
    }
}