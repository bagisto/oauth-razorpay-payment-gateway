<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'התחבר',
            'oauth-client-id'     => 'OAuth מזהה לקוח',
            'oauth-client-secret' => 'OAuth סוד לקוח',
            'refresh'             => 'רענן',
            'title'               => 'חיבור OAuth של Razorpay',

            'response' => [
                'client-id-missing' => 'מזהה לקוח OAuth חסר.',
                'no-auth-received'  => 'לא התקבל קוד הרשאה.',
                'not-configured'    => 'אישורי OAuth של Razorpay לא הוגדרו.',
                'oauth-connected'   => 'החיבור ל-OAuth של Razorpay הושלם בהצלחה.',
                'setup-razorpay'    => 'הגדר תחילה את חיבור ה-OAuth של Razorpay.',
                'token-expired'     => "לא ניתן לעבד את שיטת התשלום הזו. נסה שוב מאוחר יותר.",
                'token-failed'      => 'החלפת אסימון נכשלה.',
                'token-refreshed'   => 'אסימון רוענן בהצלחה.',
                'unexpected-error'  => 'אירעה שגיאה בלתי צפויה: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'אנא המתן, ההזמנה שלך בעיבוד...',
                'title'   => 'קופה Razorpay',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'מזהה לקוח',
        'client-secret'            => 'סוד לקוח',
        'description'              => 'תיאור',
        'info'                     => 'Razorpay היא פלטפורמת טכנולוגיה פיננסית המסייעת לעסקים לקבל, לעבד ולהפיץ תשלומים.',
        'merchant_desc'            => 'תיאור העסקה (יוצג בטופס התשלום)',
        'merchant_name'            => 'שם הסוחר (יוצג בטופס התשלום)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'מזהה לקוח OAuth',
        'oauth-client-secret'      => 'סוד לקוח OAuth',
        'oauth-test-client-id'     => 'מזהה לקוח בדיקה OAuth',
        'oauth-test-client-secret' => 'סוד לקוח בדיקה OAuth',
        'status'                   => 'מצב',
        'test-mode-id'             => 'מזהה מצב בדיקה',
        'test-mode-secret'         => 'סוד מצב בדיקה',
        'title'                    => 'כותרת',
    ],

    'response' => [
        'credentials-missing'  => 'פרטי ההזדהות של רייזורפיי חסרים!',
        'error-message'        => 'אירעה שגיאה בעת טעינת שער התשלום. אנא נסה שוב.',
        'razorpay-cancelled'   => 'התשלום ב-Razorpay בוטל.', 
        'something-went-wrong' => 'משהו השתבש',
    ],
];