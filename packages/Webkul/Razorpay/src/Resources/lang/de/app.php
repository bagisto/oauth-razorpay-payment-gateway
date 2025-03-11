<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Verbinden',
            'oauth-client-id'     => 'OAuth-Client-ID',
            'oauth-client-secret' => 'OAuth-Client-Geheimnis',
            'refresh'             => 'Aktualisieren',
            'title'               => 'Razorpay OAuth-Verbindung',

            'response' => [
                'client-id-missing' => 'OAuth-Client-ID fehlt.',
                'no-auth-received'  => 'Kein Autorisierungscode erhalten.',
                'not-configured'    => 'Razorpay OAuth-Zugangsdaten sind nicht konfiguriert.',
                'oauth-connected'   => 'Razorpay OAuth erfolgreich verbunden.',
                'setup-razorpay'    => 'Richten Sie zuerst Razorpay OAuth Connect ein.',
                'token-expired'     => "Diese Zahlungsmethode kann nicht verarbeitet werden. Bitte versuchen Sie es später erneut.",
                'token-failed'      => 'Token-Austausch fehlgeschlagen.',
                'token-refreshed'   => 'Token erfolgreich aktualisiert.',
                'unexpected-error'  => 'Ein unerwarteter Fehler ist aufgetreten: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Bitte warten Sie, Ihre Bestellung wird bearbeitet...',
                'title'   => 'Razorpay Kasse',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'Kunden-ID',
        'client-secret'            => 'Kundengeheimnis',
        'description'              => 'Beschreibung',
        'info'                     => 'Razorpay ist eine Finanztechnologieplattform, die Unternehmen dabei hilft, Zahlungen zu akzeptieren, zu verarbeiten und auszuzahlen.',
        'merchant_desc'            => 'Transaktionsbeschreibung (wird im Zahlungsformular angezeigt)',
        'merchant_name'            => 'Händlername (wird im Zahlungsformular angezeigt)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'OAuth-Client-ID',
        'oauth-client-secret'      => 'OAuth-Client-Geheimnis',
        'oauth-test-client-id'     => 'OAuth-Test-Client-ID',
        'oauth-test-client-secret' => 'OAuth-Test-Client-Geheimnis',
        'status'                   => 'Status',
        'test-mode-id'             => 'Testmodus-ID',
        'test-mode-secret'         => 'Testmodus-Geheimnis',
        'title'                    => 'Titel',
    ],

    'response' => [
        'credentials-missing'  => 'Razorpay Zugangsdaten fehlen!',
        'error-message'        => 'Beim Laden des Zahlungs-Gateways ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.',
        'razorpay-cancelled'   => 'Die Razorpay-Zahlung wurde storniert.',
        'something-went-wrong' => 'Etwas ist schiefgelaufen',
    ],
];