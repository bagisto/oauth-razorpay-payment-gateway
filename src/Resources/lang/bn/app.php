<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'সংযোগ করুন',
            'oauth-client-id'     => 'OAuth ক্লায়েন্ট আইডি',
            'oauth-client-secret' => 'OAuth ক্লায়েন্ট সিক্রেট',
            'refresh'             => 'রিফ্রেশ',
            'title'               => 'Razorpay OAuth সংযোগ',

            'response' => [
                'client-id-missing' => 'OAuth ক্লায়েন্ট আইডি অনুপস্থিত।',
                'no-auth-received'  => 'কোনও অথরাইজেশন কোড পাওয়া যায়নি।',
                'not-configured'    => 'Razorpay OAuth ক্রেডেনশিয়াল কনফিগার করা হয়নি।',
                'oauth-connected'   => 'Razorpay OAuth সফলভাবে সংযুক্ত হয়েছে।',
                'setup-razorpay'    => 'প্রথমে Razorpay OAuth সংযোগ সেটআপ করুন।',
                'token-expired'     => "এই পেমেন্ট পদ্ধতিটি প্রক্রিয়াকরণ করা সম্ভব নয়। পরে আবার চেষ্টা করুন।",
                'token-failed'      => 'টোকেন বিনিময় ব্যর্থ হয়েছে।',
                'token-refreshed'   => 'টোকেন সফলভাবে রিফ্রেশ হয়েছে।',
                'unexpected-error'  => 'একটি অপ্রত্যাশিত ত্রুটি ঘটেছে: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'অনুগ্রহ করে অপেক্ষা করুন, আপনার অর্ডার প্রক্রিয়াকরণ হচ্ছে...',
                'title'   => 'Razorpay চেকআউট',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'ক্লায়েন্ট আইডি',
        'client-secret'            => 'ক্লায়েন্ট সিক্রেট',
        'description'              => 'বর্ণনা',
        'info'                     => 'Razorpay একটি আর্থিক প্রযুক্তি প্ল্যাটফর্ম যা ব্যবসাগুলিকে পেমেন্ট গ্রহণ, প্রক্রিয়া এবং বিতরণ করতে সহায়তা করে।',
        'merchant_desc'            => 'লেনদেনের বিবরণ (পেমেন্ট ফর্মে দেখানো হবে)',
        'merchant_name'            => 'মার্চেন্টের নাম (পেমেন্ট ফর্মে দেখানো হবে)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuth ক্লায়েন্ট আইডি',
        'oauth-client-secret'      => 'OAuth ক্লায়েন্ট সিক্রেট',
        'oauth-test-client-id'     => 'OAuth টেস্ট ক্লায়েন্ট আইডি',
        'oauth-test-client-secret' => 'OAuth টেস্ট ক্লায়েন্ট সিক্রেট',
        'status'                   => 'স্থিতি',
        'test-mode-id'             => 'পরীক্ষা মোড আইডি',
        'test-mode-secret'         => 'পরীক্ষা মোড সিক্রেট',
        'title'                    => 'শিরোনাম',
    ],

    'response' => [
        'credentials-missing'  => 'রেজরপে ক্রেডেনশিয়াল অনুপস্থিত!',
        'error-message'        => 'পেমেন্ট গেটওয়ে লোড করার সময় একটি ত্রুটি ঘটেছে। অনুগ্রহ করে আবার চেষ্টা করুন।',
        'razorpay-cancelled'   => 'Razorpay পেমেন্ট বাতিল করা হয়েছে।',
        'something-went-wrong' => 'কিছু ভুল হয়েছে',
    ],
];