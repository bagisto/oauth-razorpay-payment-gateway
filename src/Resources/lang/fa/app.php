<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'اتصال',
            'oauth-client-id'     => 'شناسه کاربری OAuth',
            'oauth-client-secret' => 'رمز کاربری OAuth',
            'refresh'             => 'بروزرسانی',
            'title'               => 'اتصال OAuth ریزرپی',

            'response' => [
                'client-id-missing' => 'شناسه کاربری OAuth موجود نیست.',
                'no-auth-received'  => 'کد تأییدیه دریافت نشد.',
                'not-configured'    => 'اطلاعات کاربری OAuth ریزرپی تنظیم نشده است.',
                'oauth-connected'   => 'اتصال OAuth ریزرپی با موفقیت انجام شد.',
                'setup-razorpay'    => 'ابتدا اتصال OAuth ریزرپی را تنظیم کنید.',
                'token-expired'     => "نمی‌توان این روش پرداخت را پردازش کرد. لطفاً بعداً دوباره امتحان کنید.",
                'token-failed'      => 'تبادل توکن ناموفق بود.',
                'token-refreshed'   => 'توکن با موفقیت بروزرسانی شد.',
                'unexpected-error'  => 'یک خطای غیرمنتظره رخ داد: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'لطفاً منتظر بمانید، سفارش شما در حال پردازش است...', 
                'title'   => 'پرداخت ریزرپی',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'شناسه مشتری',
        'client-secret'            => 'رمز مشتری',
        'description'              => 'توضیحات',
        'info'                     => 'Razorpay یک پلتفرم فناوری مالی است که به کسب‌وکارها کمک می‌کند پرداخت‌ها را بپذیرند، پردازش و توزیع کنند.',
        'merchant_desc'            => 'توضیحات تراکنش (برای نمایش در فرم پرداخت)',
        'merchant_name'            => 'نام فروشنده (برای نمایش در فرم پرداخت)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'شناسه مشتری OAuth',
        'oauth-client-secret'      => 'رمز مشتری OAuth',
        'oauth-test-client-id'     => 'شناسه مشتری تست OAuth',
        'oauth-test-client-secret' => 'رمز مشتری تست OAuth',
        'status'                   => 'وضعیت',
        'test-mode-id'             => 'شناسه حالت آزمایشی',
        'test-mode-secret'         => 'رمز حالت آزمایشی',
        'title'                    => 'عنوان',
    ],

    'response' => [
        'credentials-missing'  => 'اعتبارات Razorpay موجود نیست!',
        'error-message'        => 'هنگام بارگیری درگاه پرداخت خطایی رخ داده است. لطفاً دوباره امتحان کنید.',
        'razorpay-cancelled'   => 'پرداخت Razorpay لغو شده است.',
        'something-went-wrong' => 'مشکلی پیش آمده است',
    ],
];