<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'कनेक्ट करें',
            'oauth-client-id'     => 'OAuth क्लाइंट आईडी',
            'oauth-client-secret' => 'OAuth क्लाइंट सीक्रेट',
            'refresh'             => 'रिफ्रेश',
            'title'               => 'Razorpay OAuth कनेक्ट',

            'response' => [
                'client-id-missing' => 'OAuth क्लाइंट आईडी गायब है।',
                'no-auth-received'  => 'कोई अधिकृत कोड प्राप्त नहीं हुआ।',
                'not-configured'    => 'Razorpay OAuth क्रेडेंशियल्स कॉन्फ़िगर नहीं किए गए हैं।',
                'oauth-connected'   => 'Razorpay OAuth सफलतापूर्वक कनेक्ट हो गया।',
                'setup-razorpay'    => 'पहले Razorpay OAuth कनेक्ट सेटअप करें।',
                'token-expired'     => "इस भुगतान विधि को संसाधित नहीं किया जा सकता है। कृपया बाद में पुनः प्रयास करें।",  
                'token-failed'      => 'टोकन एक्सचेंज विफल।',
                'token-refreshed'   => 'टोकन सफलतापूर्वक रिफ्रेश हुआ।',
                'unexpected-error'  => 'एक अप्रत्याशित त्रुटि हुई: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'कृपया प्रतीक्षा करें, आपका आदेश संसाधित हो रहा है...',
                'title'   => 'Razorpay चेकआउट',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'क्लाइंट आईडी',
        'client-secret'            => 'क्लाइंट सीक्रेट',
        'description'              => 'विवरण',
        'info'                     => 'Razorpay एक वित्तीय तकनीकी मंच है जो व्यवसायों को भुगतान स्वीकार करने, प्रक्रिया करने और वितरित करने में मदद करता है।',
        'merchant_desc'            => 'लेन-देन विवरण (भुगतान फ़ॉर्म पर दिखाया जाएगा)',
        'merchant_name'            => 'व्यापारी का नाम (भुगतान फ़ॉर्म पर दिखाया जाएगा)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuth क्लाइंट आईडी',
        'oauth-client-secret'      => 'OAuth क्लाइंट सीक्रेट',
        'oauth-test-client-id'     => 'OAuth टेस्ट क्लाइंट आईडी',
        'oauth-test-client-secret' => 'OAuth टेस्ट क्लाइंट सीक्रेट',
        'status'                   => 'स्थिति',
        'test-mode-id'             => 'टेस्ट मोड आईडी',
        'test-mode-secret'         => 'टेस्ट मोड सीक्रेट',
        'title'                    => 'शीर्षक',
    ],

    'response' => [
        'credentials-missing'  => 'Razorpay प्रमाणपत्र गायब है!',
        'error-message'        => 'भुगतान गेटवे लोड करते समय एक त्रुटि हुई। कृपया पुनः प्रयास करें।',
        'razorpay-cancelled'   => 'Razorpay भुगतान रद्द कर दिया गया है।',
        'something-went-wrong' => 'कुछ गलत हो गया',
    ],
];