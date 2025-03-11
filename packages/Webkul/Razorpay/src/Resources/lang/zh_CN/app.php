<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => '连接',
            'oauth-client-id'     => 'OAuth 客户端 ID',
            'oauth-client-secret' => 'OAuth 客户端密钥',
            'refresh'             => '刷新',
            'title'               => 'Razorpay OAuth 连接',

            'response' => [
                'client-id-missing' => '缺少 OAuth 客户端 ID。',
                'no-auth-received'  => '未收到授权代码。',
                'not-configured'    => 'Razorpay OAuth 凭据未配置。',
                'oauth-connected'   => '成功连接 Razorpay OAuth。',
                'setup-razorpay'    => '请先设置 Razorpay OAuth 连接。',
                'token-expired'     => "无法处理此支付方式。请稍后再试。",
                'token-failed'      => '令牌交换失败。',
                'token-refreshed'   => '令牌刷新成功。',
                'unexpected-error'  => '发生意外错误: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => '请稍等，正在处理您的订单...',
                'title'   => 'Razorpay 结账',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => '客户 ID',
        'client-secret'            => '客户密钥',
        'description'              => '描述',
        'info'                     => 'Razorpay 是一个金融技术平台，可帮助企业接受、处理和分发支付。',
        'merchant_desc'            => '交易描述（将在支付表单中显示）',
        'merchant_name'            => '商户名称（将在支付表单中显示）',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuth客户端ID',
        'oauth-client-secret'      => 'OAuth客户端密钥',
        'oauth-test-client-id'     => 'OAuth测试客户端ID',
        'oauth-test-client-secret' => 'OAuth测试客户端密钥',
        'status'                   => '状态',
        'test-mode-id'             => '测试模式 ID',
        'test-mode-secret'         => '测试模式密钥',
        'title'                    => '标题',
    ],

    'response' => [
        'credentials-missing'  => '缺少 Razorpay 凭据！',
        'error-message'        => '加载支付网关时出错。请再试一次。',
        'razorpay-cancelled'   => 'Razorpay 付款已被取消。',
        'something-went-wrong' => '出现错误',
    ],
];