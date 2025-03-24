<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Połącz',
            'oauth-client-id'     => 'ID klienta OAuth',
            'oauth-client-secret' => 'Sekret klienta OAuth',
            'refresh'             => 'Odśwież',
            'title'               => 'Połączenie OAuth Razorpay',

            'response' => [
                'client-id-missing' => 'Brak ID klienta OAuth.',
                'no-auth-received'  => 'Nie otrzymano kodu autoryzacyjnego.',
                'not-configured'    => 'Poświadczenia OAuth Razorpay nie zostały skonfigurowane.',
                'oauth-connected'   => 'Połączenie OAuth Razorpay zakończone sukcesem.',
                'setup-razorpay'    => 'Najpierw skonfiguruj połączenie OAuth Razorpay.',
                'token-expired'     => "Nie można przetworzyć tej metody płatności. Spróbuj ponownie później.",
                'token-failed'      => 'Wymiana tokena nie powiodła się.',
                'token-refreshed'   => 'Token został pomyślnie odświeżony.',
                'unexpected-error'  => 'Wystąpił nieoczekiwany błąd: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Proszę czekać, przetwarzamy Twoje zamówienie...',
                'title'   => 'Kasa Razorpay',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'ID Klienta',
        'client-secret'            => 'Tajny Klient',
        'description'              => 'Opis',
        'info'                     => 'Razorpay to platforma technologii finansowych, która pomaga firmom przyjmować, przetwarzać i rozdzielać płatności.',
        'merchant_desc'            => 'Opis transakcji (wyświetlany w formularzu płatności)',
        'merchant_name'            => 'Nazwa Handlowa (wyświetlana w formularzu płatności)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'ID klienta OAuth',
        'oauth-client-secret'      => 'Sekret klienta OAuth',
        'oauth-test-client-id'     => 'ID klienta testowego OAuth',
        'oauth-test-client-secret' => 'Sekret klienta testowego OAuth',
        'status'                   => 'Status',
        'test-mode-id'             => 'ID Trybu Testowego',
        'test-mode-secret'         => 'Tajny Tryb Testowy',
        'title'                    => 'Tytuł',
    ],

    'response' => [
        'credentials-missing'  => 'Brak danych uwierzytelniających Razorpay!',
        'error-message'        => 'Wystąpił błąd podczas ładowania bramki płatniczej. Spróbuj ponownie.',
        'razorpay-cancelled'   => 'Płatność Razorpay została anulowana.',
        'something-went-wrong' => 'Coś poszło nie tak',
    ],
];