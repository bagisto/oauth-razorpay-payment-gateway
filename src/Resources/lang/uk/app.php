<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Підключити',
            'oauth-client-id'     => 'Ідентифікатор клієнта OAuth',
            'oauth-client-secret' => 'Секрет клієнта OAuth',
            'refresh'             => 'Оновити',
            'title'               => 'Підключення OAuth Razorpay',

            'response' => [
                'client-id-missing' => 'Відсутній ідентифікатор клієнта OAuth.',
                'no-auth-received'  => 'Код авторизації не отримано.',
                'not-configured'    => 'Облікові дані OAuth Razorpay не налаштовано.',
                'oauth-connected'   => 'OAuth Razorpay успішно підключено.',
                'setup-razorpay'    => 'Спочатку налаштуйте підключення OAuth Razorpay.',
                'token-expired'     => "Неможливо обробити цей спосіб оплати. Спробуйте пізніше.",
                'token-failed'      => 'Обмін токеном не вдався.',
                'token-refreshed'   => 'Токен успішно оновлено.',
                'unexpected-error'  => 'Сталася несподівана помилка: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Будь ласка, зачекайте, ми обробляємо ваше замовлення...',
                'title'   => 'Каса Razorpay',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'Ідентифікатор клієнта',
        'client-secret'            => 'Секрет клієнта',
        'description'              => 'Опис',
        'info'                     => 'Razorpay — це фінансова технологічна платформа, яка допомагає бізнесу приймати, обробляти та розподіляти платежі.',
        'merchant_desc'            => 'Опис транзакції (показується у формі оплати)',
        'merchant_name'            => 'Назва продавця (показується у формі оплати)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'ID клієнта OAuth',
        'oauth-client-secret'      => 'Секрет клієнта OAuth',
        'oauth-test-client-id'     => 'ID тестового клієнта OAuth',
        'oauth-test-client-secret' => 'Секрет тестового клієнта OAuth',
        'status'                   => 'Статус',
        'test-mode-id'             => 'Ідентифікатор тестового режиму',
        'test-mode-secret'         => 'Секрет тестового режиму',
        'title'                    => 'Назва',
    ],

    'response' => [
        'credentials-missing'  => 'Відсутні облікові дані Razorpay!',
        'error-message'        => 'Під час завантаження платіжного шлюзу сталася помилка. Будь ласка, спробуйте ще раз.',
        'razorpay-cancelled'   => 'Платіж Razorpay було скасовано.',
        'something-went-wrong' => 'Щось пішло не так',
    ],
];