<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'اتصال',
            'oauth-client-id'     => 'معرف العميل OAuth',
            'oauth-client-secret' => 'سر العميل OAuth',
            'refresh'             => 'تحديث',
            'title'               => 'الاتصال بـ Razorpay OAuth',

            'response' => [
                'client-id-missing' => 'معرف العميل OAuth مفقود.',
                'no-auth-received'  => 'لم يتم استلام رمز التفويض.',
                'not-configured'    => 'بيانات اعتماد Razorpay OAuth غير مهيأة.',
                'oauth-connected'   => 'تم الاتصال بـ Razorpay OAuth بنجاح.',
                'setup-razorpay'    => 'قم بإعداد الاتصال بـ Razorpay OAuth أولاً.',
                'token-expired'     => "لا يمكن معالجة هذه الطريقة للدفع. حاول مرة أخرى لاحقًا.",
                'token-failed'      => 'فشل في تبادل الرموز.',
                'token-refreshed'   => 'تم تحديث الرمز بنجاح.',
                'unexpected-error'  => 'حدث خطأ غير متوقع: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'يرجى الانتظار، جاري معالجة طلبك...',
                'title'   => 'Razorpay الدفع',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'معرف العميل',
        'client-secret'            => 'سر العميل',
        'description'              => 'الوصف',
        'info'                     => 'Razorpay هي منصة تكنولوجيا مالية تساعد الشركات في قبول ومعالجة وتوزيع المدفوعات.',
        'merchant_desc'            => 'وصف المعاملة (يُعرض في نموذج الدفع)',
        'merchant_name'            => 'اسم التاجر (يُعرض في نموذج الدفع)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'معرف عميل OAuth',
        'oauth-client-secret'      => 'سر عميل OAuth',
        'oauth-test-client-id'     => 'معرف عميل اختبار OAuth',
        'oauth-test-client-secret' => 'سر عميل اختبار OAuth',
        'status'                   => 'الحالة',
        'test-mode-id'             => 'معرف وضع الاختبار',
        'test-mode-secret'         => 'سر وضع الاختبار',
        'title'                    => 'العنوان',
    ],

    'response' => [
        'credentials-missing'  => 'بيانات رايزورباي مفقودة!',
        'error-message'        => 'حدث خطأ أثناء تحميل بوابة الدفع. يرجى المحاولة مرة أخرى.',
        'razorpay-cancelled'   => 'تم إلغاء دفعة Razorpay.',
        'something-went-wrong' => 'حدث خطأ ما',
    ],
];