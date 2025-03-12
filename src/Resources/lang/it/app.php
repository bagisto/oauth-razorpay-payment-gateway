<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Connetti',
            'oauth-client-id'     => 'ID cliente OAuth',
            'oauth-client-secret' => 'Segreto cliente OAuth',
            'refresh'             => 'Aggiorna',
            'title'               => 'Connessione OAuth Razorpay',

            'response' => [
                'client-id-missing' => "ID cliente OAuth mancante.",
                'no-auth-received'  => "Codice di autorizzazione non ricevuto.",
                'not-configured'    => "Le credenziali OAuth di Razorpay non sono configurate.",
                'oauth-connected'   => "Connessione OAuth di Razorpay riuscita.",
                'setup-razorpay'    => "Configura prima la connessione OAuth di Razorpay.",
                'token-expired'     => "Impossibile elaborare questo metodo di pagamento. Riprova più tardi.",  
                'token-failed'      => "Scambio del token fallito.",
                'token-refreshed'   => "Token aggiornato con successo.",
                'unexpected-error'  => "Si è verificato un errore inaspettato: ",
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Attendere prego, stiamo elaborando il tuo ordine...',
                'title'   => 'Pagamento Razorpay',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'ID Cliente',
        'client-secret'            => 'Segreto Cliente',
        'description'              => 'Descrizione',
        'info'                     => 'Razorpay è una piattaforma tecnologica finanziaria che aiuta le aziende ad accettare, elaborare e distribuire pagamenti.',
        'merchant_desc'            => 'Descrizione della transazione (mostrata nel modulo di pagamento)',
        'merchant_name'            => 'Nome del Commerciante (mostrato nel modulo di pagamento)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'ID client OAuth',
        'oauth-client-secret'      => 'Segreto client OAuth',
        'oauth-test-client-id'     => 'ID client di test OAuth',
        'oauth-test-client-secret' => 'Segreto client di test OAuth',
        'status'                   => 'Stato',
        'test-mode-id'             => 'ID Modalità Test',
        'test-mode-secret'         => 'Segreto Modalità Test',
        'title'                    => 'Titolo',
    ],

    'response' => [
        'credentials-missing'  => 'Le credenziali di Razorpay sono mancanti!',
        'error-message'        => 'Si è verificato un errore durante il caricamento del gateway di pagamento. Riprova.',
        'razorpay-cancelled'   => 'Il pagamento Razorpay è stato annullato.',
        'something-went-wrong' => 'Qualcosa è andato storto',
    ],
];