<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'සම්බන්ධ කරන්න',
            'oauth-client-id'     => 'OAuth පාරිභෝගික හැඳුනුම්පත',
            'oauth-client-secret' => 'OAuth පාරිභෝගික රහස',
            'refresh'             => 'නවීකරණය',
            'title'               => 'Razorpay OAuth සම්බන්ධතාව',

            'response' => [
                'client-id-missing' => 'OAuth පාරිභෝගික හැඳුනුම්පත නොමැත.',
                'no-auth-received'  => 'අනුමත කිරීමේ කේතයක් ලැබී නොමැත.',
                'not-configured'    => 'Razorpay OAuth හදුනාගැනීම් සකස් කර නැත.',
                'oauth-connected'   => 'Razorpay OAuth සාර්ථකව සම්බන්ධ විය.',
                'setup-razorpay'    => 'පළමුව Razorpay OAuth සම්බන්ධතාව සකසන්න.',
                'token-expired'     => "මෙම ගෙවීමේ ක්‍රමය පනිනු ලැබිය නොහැක. කරුණාකර පසුව නැවත උත්සාහ කරන්න.",
                'token-failed'      => 'ටෝකන් හුවමාරුව අසාර්ථකයි.',
                'token-refreshed'   => 'ටෝකන් සාර්ථකව නවීකරණය විය.',
                'unexpected-error'  => 'අපේක්ෂිත නොවූ දෝෂයක් සිදුවී ඇත: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'කරුණාකර රැඳී සිටින්න, ඔබේ ඇණවුම සැකසෙමින් පවතී...',
                'title'   => 'Razorpay ගෙවීම',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'සැකසුම් අංකය',
        'client-secret'            => 'රහස් අංකය',
        'description'              => 'විස්තරය',
        'info'                     => 'Razorpay යනු ව්‍යාපාර සඳහා ගෙවීම් පිළිගැනීම, සැකසුම් කිරීම, සහ බෙදා හැරීම සඳහා උදව් කරන මූල්‍ය තාක්‍ෂණ වේදිකාවකි.',
        'merchant_desc'            => 'ගනුදෙනු විස්තරය (ගෙවීම් ආකෘති පෝරමයේ පෙන්වනු ඇත)',
        'merchant_name'            => 'වෙළඳ නාමය (ගෙවීම් ආකෘති පෝරමයේ පෙන්වනු ඇත)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuth Клиණ්ට් හැඳුනුම්',
        'oauth-client-secret'      => 'OAuth Клиණ්ට් රහස් කේතය',
        'oauth-test-client-id'     => 'OAuth පරීක්ෂණ Клиණ්ට් හැඳුනුම්',
        'oauth-test-client-secret' => 'OAuth පරීක්ෂණ Клиණ්ට් රහස් කේතය',
        'status'                   => 'තත්ත්වය',
        'test-mode-id'             => 'පරීක්ෂණ ආකාර ID',
        'test-mode-secret'         => 'පරීක්ෂණ ආකාර රහස',
        'title'                    => 'ශීර්ෂය',
    ],

    'response' => [
        'credentials-missing'  => 'Razorpay අක්තපත්‍ර අතුරුදන්!',
        'error-message'        => 'ගෙවීම් දොරටුව පූරණය කිරීමේදී දෝෂයක් ඇතිවිය. කරුණාකර නැවත උත්සාහ කරන්න.',
        'razorpay-cancelled'   => 'Razorpay ගෙවීම අවලංගු කර ඇත.',
        'something-went-wrong' => 'කිසියම් දෙයක් වැරදී ඇත',
    ],
];