<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => '接続',
            'oauth-client-id'     => 'OAuth クライアントID',
            'oauth-client-secret' => 'OAuth クライアントシークレット',
            'refresh'             => '更新',
            'title'               => 'Razorpay OAuth 接続',

            'response' => [
                'client-id-missing' => 'OAuth クライアントIDが見つかりません。',
                'no-auth-received'  => '認証コードが受信されませんでした。',
                'not-configured'    => 'Razorpay OAuth 資格情報が構成されていません。',
                'oauth-connected'   => 'Razorpay OAuth が正常に接続されました。',
                'setup-razorpay'    => 'まずRazorpay OAuth 接続を設定してください。',
                'token-expired'     => "この支払い方法を処理できません。後でもう一度お試しください。", 
                'token-failed'      => 'トークン交換に失敗しました。',
                'token-refreshed'   => 'トークンが正常に更新されました。',
                'unexpected-error'  => '予期しないエラーが発生しました: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'お待ちください、ご注文を処理しています...',
                'title'   => 'Razorpay チェックアウト',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'クライアントID',
        'client-secret'            => 'クライアントシークレット',
        'description'              => '説明',
        'info'                     => 'Razorpayは、企業が支払いを受け入れ、処理し、分配するのを支援する金融技術プラットフォームです。',
        'merchant_desc'            => '取引の説明（支払いフォームに表示されます）',
        'merchant_name'            => '販売者名（支払いフォームに表示されます）',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuthクライアントID',
        'oauth-client-secret'      => 'OAuthクライアントシークレット',
        'oauth-test-client-id'     => 'OAuthテストクライアントID',
        'oauth-test-client-secret' => 'OAuthテストクライアントシークレット',
        'status'                   => 'ステータス',
        'test-mode-id'             => 'テストモードID',
        'test-mode-secret'         => 'テストモードシークレット',
        'title'                    => 'タイトル',
    ],

    'response' => [
        'credentials-missing'  => 'Razorpayの認証情報がありません！',
        'error-message'        => '支払いゲートウェイの読み込み中にエラーが発生しました。もう一度お試しください。',
        'razorpay-cancelled'   => 'Razorpayの支払いがキャンセルされました。', 
        'something-went-wrong' => '問題が発生しました',
    ],
];