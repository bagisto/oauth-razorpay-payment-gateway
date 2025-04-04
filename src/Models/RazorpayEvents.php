<?php

namespace Webkul\Razorpay\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webkul\Razorpay\Contracts\RazorpayEvents as ContractsRazorpayEvents;

class RazorpayEvents extends Model implements ContractsRazorpayEvents
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'rzp_payments';

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
        'core_order_id',
        'razorpay_event_id',
        'razorpay_invoice_id',
        'razorpay_order_id',
        'razorpay_payment_id',
        'razorpay_invoice_status',
        'razorpay_invoice_receipt',
        'razorpay_signature',
        'additional',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}