<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Connecter',
            'oauth-client-id'     => 'ID client OAuth',
            'oauth-client-secret' => 'Secret client OAuth',
            'refresh'             => 'Actualiser',
            'title'               => 'Connexion OAuth Razorpay',

            'response' => [
                'client-id-missing' => 'ID client OAuth manquant.',
                'no-auth-received'  => 'Aucun code d’autorisation reçu.',
                'not-configured'    => 'Les identifiants OAuth Razorpay ne sont pas configurés.',
                'oauth-connected'   => 'Connexion OAuth Razorpay réussie.',
                'setup-razorpay'    => 'Configurez d’abord la connexion OAuth Razorpay.',
                'token-expired'     => "Impossible de traiter ce mode de paiement. Veuillez réessayer plus tard.",
                'token-failed'      => 'Échec de l’échange de jeton.',
                'token-refreshed'   => 'Jeton actualisé avec succès.',
                'unexpected-error'  => 'Une erreur inattendue est survenue : ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Veuillez patienter, nous traitons votre commande...',
                'title'   => 'Paiement Razorpay',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'Identifiant Client',
        'client-secret'            => 'Secret Client',
        'description'              => 'Description',
        'info'                     => 'Razorpay est une plateforme technologique financière qui aide les entreprises à accepter, traiter et distribuer les paiements.',
        'merchant_desc'            => 'Description de la transaction (à afficher sur le formulaire de paiement)',
        'merchant_name'            => 'Nom du commerçant (à afficher sur le formulaire de paiement)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'ID client OAuth',
        'oauth-client-secret'      => 'Secret client OAuth',
        'oauth-test-client-id'     => 'ID client de test OAuth',
        'oauth-test-client-secret' => 'Secret client de test OAuth',
        'status'                   => 'Statut',
        'test-mode-id'             => 'Identifiant Mode Test',
        'test-mode-secret'         => 'Secret Mode Test',
        'title'                    => 'Titre',
    ],

    'response' => [
        'credentials-missing'  => 'Les identifiants Razorpay sont manquants !',
        'error-message'        => "Une erreur s'est produite lors du chargement de la passerelle de paiement. Veuillez réessayer.",
        'razorpay-cancelled'   => 'Le paiement Razorpay a été annulé.',
        'something-went-wrong' => 'Une erreur est survenue',
    ],
];