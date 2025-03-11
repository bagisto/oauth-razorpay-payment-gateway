<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Bağlan',
            'oauth-client-id'     => 'OAuth Müşteri Kimliği',
            'oauth-client-secret' => 'OAuth Müşteri Şifresi',
            'refresh'             => 'Yenile',
            'title'               => 'Razorpay OAuth Bağlantısı',

            'response' => [
                'client-id-missing' => 'OAuth Müşteri Kimliği eksik.',
                'no-auth-received'  => 'Yetkilendirme kodu alınmadı.',
                'not-configured'    => 'Razorpay OAuth bilgileri yapılandırılmamış.',
                'oauth-connected'   => 'Razorpay OAuth başarıyla bağlandı.',
                'setup-razorpay'    => 'Önce Razorpay OAuth bağlantısını ayarlayın.',
                'token-expired'     => "Bu ödeme yöntemi işlenemiyor. Lütfen daha sonra tekrar deneyin.", 
                'token-failed'      => 'Jeton değişimi başarısız oldu.',
                'token-refreshed'   => 'Jeton başarıyla yenilendi.',
                'unexpected-error'  => 'Beklenmeyen bir hata oluştu: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Lütfen bekleyin, siparişiniz işleniyor...',
                'title'   => 'Razorpay Ödeme',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'Müşteri Kimliği',
        'client-secret'            => 'Müşteri Sırrı',
        'description'              => 'Açıklama',
        'info'                     => 'Razorpay, işletmelerin ödemeleri kabul etmelerine, işlemelerine ve dağıtmalarına yardımcı olan bir finansal teknoloji platformudur.',
        'merchant_desc'            => 'İşlem Açıklaması (ödeme formunda gösterilecektir)',
        'merchant_name'            => 'Tüccar Adı (ödeme formunda gösterilecektir)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuth İstemci Kimliği',
        'oauth-client-secret'      => 'OAuth İstemci Sırrı',
        'oauth-test-client-id'     => 'OAuth Test İstemci Kimliği',
        'oauth-test-client-secret' => 'OAuth Test İstemci Sırrı',
        'status'                   => 'Durum',
        'test-mode-id'             => 'Test Modu Kimliği',
        'test-mode-secret'         => 'Test Modu Sırrı',
        'title'                    => 'Başlık',
    ],

    'response' => [
        'credentials-missing'  => 'Razorpay Kimlik Bilgileri Eksik!',
        'error-message'        => 'Ödeme geçidi yüklenirken bir hata oluştu. Lütfen tekrar deneyin.',
        'razorpay-cancelled'   => 'Razorpay ödemesi iptal edildi.',
        'something-went-wrong' => 'Bir şeyler ters gitti',
    ],
];