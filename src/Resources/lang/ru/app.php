<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Подключить',
            'oauth-client-id'     => 'ID клиента OAuth',
            'oauth-client-secret' => 'Секрет клиента OAuth',
            'refresh'             => 'Обновить',
            'title'               => 'Подключение OAuth Razorpay',

            'response' => [
                'client-id-missing' => 'Отсутствует ID клиента OAuth.',
                'no-auth-received'  => 'Код авторизации не получен.',
                'not-configured'    => 'Учетные данные OAuth Razorpay не настроены.',
                'oauth-connected'   => 'OAuth Razorpay успешно подключен.',
                'setup-razorpay'    => 'Сначала настройте подключение OAuth Razorpay.',
                'token-expired'     => "Невозможно обработать этот способ оплаты. Попробуйте позже.",
                'token-failed'      => 'Не удалось обменяться токеном.',
                'token-refreshed'   => 'Токен успешно обновлен.',
                'unexpected-error'  => 'Произошла неожиданная ошибка: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Пожалуйста, подождите, ваш заказ обрабатывается...',
                'title'   => 'Касса Razorpay',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'ID клиента',
        'client-secret'            => 'Секрет клиента',
        'description'              => 'Описание',
        'info'                     => 'Razorpay — это финансовая технологическая платформа, которая помогает бизнесу принимать, обрабатывать и распределять платежи.',
        'merchant_desc'            => 'Описание транзакции (отображается в форме оплаты)',
        'merchant_name'            => 'Имя продавца (отображается в форме оплаты)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'ID клиента OAuth',
        'oauth-client-secret'      => 'Секрет клиента OAuth',
        'oauth-test-client-id'     => 'ID тестового клиента OAuth',
        'oauth-test-client-secret' => 'Секрет тестового клиента OAuth',
        'status'                   => 'Статус',
        'test-mode-id'             => 'ID тестового режима',
        'test-mode-secret'         => 'Секрет тестового режима',
        'title'                    => 'Название',
    ],

    'response' => [
        'credentials-missing'  => 'Отсутствуют учетные данные Razorpay!',
        'error-message'        => 'Произошла ошибка при загрузке платежного шлюза. Пожалуйста, попробуйте снова.',
        'razorpay-cancelled'   => 'Платёж Razorpay был отменён.',
        'something-went-wrong' => 'Что-то пошло не так',
    ],
];