<?php

namespace Webkul\Razorpay\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webkul\Razorpay\Contracts\RazorpayMerchantDetails as ContractsRazorpayMerchantDetails;

class RazorpayMerchantDetails extends Model implements ContractsRazorpayMerchantDetails
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'razorpay_merchant_details';

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'razorpay_account_id',
        'public_token',
        'access_token',
        'refresh_token',
        'expires_in',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}