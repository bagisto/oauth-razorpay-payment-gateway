<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Verbinden',
            'oauth-client-id'     => 'OAuth-client-ID',
            'oauth-client-secret' => 'OAuth-clientgeheim',
            'refresh'             => 'Vernieuwen',
            'title'               => 'Razorpay OAuth Verbinding',

            'response' => [
                'client-id-missing' => 'OAuth-client-ID ontbreekt.',
                'no-auth-received'  => 'Geen autorisatiecode ontvangen.',
                'not-configured'    => 'Razorpay OAuth-inloggegevens zijn niet geconfigureerd.',
                'oauth-connected'   => 'Razorpay OAuth succesvol verbonden.',
                'setup-razorpay'    => 'Stel eerst Razorpay OAuth Connect in.',
                'token-expired'     => "Deze betaalmethode kan niet worden verwerkt. Probeer het later opnieuw.",  
                'token-failed'      => 'Tokenuitwisseling mislukt.',
                'token-refreshed'   => 'Token succesvol vernieuwd.',
                'unexpected-error'  => 'Er is een onverwachte fout opgetreden: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Even geduld, we verwerken uw bestelling...', 
                'title'   => 'Razorpay Afrekenen',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'Klant-ID',
        'client-secret'            => 'Klantgeheim',
        'description'              => 'Beschrijving',
        'info'                     => 'Razorpay is een financieel technologieplatform dat bedrijven helpt betalingen te accepteren, verwerken en uit te betalen.',
        'merchant_desc'            => 'Transactiebeschrijving (weergegeven op het betalingsformulier)',
        'merchant_name'            => 'Naam Handelaar (weergegeven op het betalingsformulier)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuth-client-ID',
        'oauth-client-secret'      => 'OAuth-clientgeheim',
        'oauth-test-client-id'     => 'OAuth-testclient-ID',
        'oauth-test-client-secret' => 'OAuth-testclientgeheim',
        'status'                   => 'Status',
        'test-mode-id'             => 'Testmodus-ID',
        'test-mode-secret'         => 'Testmodus Geheim',
        'title'                    => 'Titel',
    ],

    'response' => [
        'credentials-missing'  => 'Razorpay-gegevens ontbreken!',
        'error-message'        => 'Er is een fout opgetreden bij het laden van de betalingsgateway. Probeer het opnieuw.',
        'razorpay-cancelled'   => 'De Razorpay-betaling is geannuleerd.',
        'something-went-wrong' => 'Er is iets misgegaan',
    ],
];