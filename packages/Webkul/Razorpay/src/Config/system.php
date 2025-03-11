<?php

return [
    [
        'key'    => 'sales.payment_methods.razorpay',
        'name'   => 'razorpay::app.configuration.name',
        'info'   => 'razorpay::app.configuration.info',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'active',
                'title'         => 'razorpay::app.configuration.status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'title',
                'title'         => 'razorpay::app.configuration.title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'razorpay::app.configuration.description',
                'type'          => 'textarea',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'sandbox',
                'title'         => 'Test Mode',
                'type'          => 'boolean',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'merchant_name',
                'title'         => 'razorpay::app.configuration.merchant-name',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'merchant_desc',
                'title'         => 'razorpay::app.configuration.merchant-desc',
                'type'          => 'textarea',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'oauth_test_client_id',
                'title'         => 'razorpay::app.configuration.oauth-test-client-id',
                'type'          => 'text',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'oauth_test_client_secret',
                'title'         => 'razorpay::app.configuration.oauth-test-client-secret',
                'type'          => 'text',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'oauth_client_id',
                'title'         => 'razorpay::app.configuration.oauth-client-id',
                'type'          => 'text',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'oauth_client_secret',
                'title'         => 'razorpay::app.configuration.oauth-client-secret',
                'type'          => 'text',
                'channel_based' => true,
                'locale_based'  => false,
            ],
        ],
    ],
];