<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Connect',
            'oauth-client-id'     => 'OAuth Client ID',
            'oauth-client-secret' => 'OAuth Client Secret',
            'refresh'             => 'Refresh',
            'title'               => 'Razorpay OAuth Connect',

            'response' => [
                'client-id-missing' => 'OAuth Client ID is missing.',
                'no-auth-received'  => 'No authorization code received.',
                'not-configured'    => 'Razorpay OAuth credentials are not configured.',
                'oauth-connected'   => 'Razorpay OAuth connected successfully.',
                'setup-razorpay'    => 'Set up Razorpay OAuth Connect first.',
                'token-expired'     => "Can't Process tp this payment method. Try again later.",
                'token-failed'      => 'Token exchange failed.',
                'token-refreshed'   => 'Token refreshed successfully.',
                'unexpected-error'  => 'An unexpected error occurred: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Kindly Wait, Processing your order...',
                'title'   => 'Razorpay Checkout',
            ],
        ],
    ],
    
    'configuration' => [
        'client-id'                => 'Client ID',
        'client-secret'            => 'Client Secret',
        'description'              => 'Description',
        'info'                     => 'Razorpay is a financial technology platform that helps businesses accept, process, and disburse payments.',
        'merchant-desc'            => 'Transaction Description (To be shown on payment form)',
        'merchant-name'            => 'Merchant Name (To be shown on payment form)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuth Client ID',
        'oauth-client-secret'      => 'OAuth Client Secret',
        'oauth-test-client-id'     => 'OAuth Test Client ID',
        'oauth-test-client-secret' => 'OAuth Test Client Secret',
        'status'                   => 'Status',
        'test-mode-id'             => 'Test Mode ID',
        'test-mode-secret'         => 'Test Mode Secret',
        'title'                    => 'Title',
    ],

    'response' => [
        'credentials-missing'  => 'Razorpay Credentials is Missing!',
        'error-message'        => 'An error occurred while loading the payment gateway. Please try again.',
        'razorpay-cancelled'   => 'Razorpay payment has been cancelled.',
        'something-went-wrong' => 'Something went wrong',
    ],
];