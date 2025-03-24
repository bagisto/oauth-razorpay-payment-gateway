<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Conectar',
            'oauth-client-id'     => 'ID de cliente OAuth',
            'oauth-client-secret' => 'Secreto de cliente OAuth',
            'refresh'             => 'Actualizar',
            'title'               => 'Conexión OAuth de Razorpay',

            'response' => [
                'client-id-missing' => 'Falta el ID de cliente OAuth.',
                'no-auth-received'  => 'No se recibió un código de autorización.',
                'not-configured'    => 'Las credenciales OAuth de Razorpay no están configuradas.',
                'oauth-connected'   => 'Conexión OAuth de Razorpay exitosa.',
                'setup-razorpay'    => 'Configura primero la conexión OAuth de Razorpay.',
                'token-expired'     => "No se puede procesar este método de pago. Inténtalo de nuevo más tarde.",
                'token-failed'      => 'Falló el intercambio de token.',
                'token-refreshed'   => 'Token actualizado exitosamente.',
                'unexpected-error'  => 'Ocurrió un error inesperado: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Por favor, espere, procesando su pedido...',
                'title'   => 'Pago con Razorpay',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'ID del Cliente',
        'client-secret'            => 'Secreto del Cliente',
        'description'              => 'Descripción',
        'info'                     => 'Razorpay es una plataforma tecnológica financiera que ayuda a las empresas a aceptar, procesar y distribuir pagos.',
        'merchant_desc'            => 'Descripción de la Transacción (se mostrará en el formulario de pago)',
        'merchant_name'            => 'Nombre del Comerciante (se mostrará en el formulario de pago)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'ID de cliente OAuth',
        'oauth-client-secret'      => 'Secreto de cliente OAuth',
        'oauth-test-client-id'     => 'ID de cliente de prueba OAuth',
        'oauth-test-client-secret' => 'Secreto de cliente de prueba OAuth',
        'status'                   => 'Estado',
        'test-mode-id'             => 'ID de Modo de Prueba',
        'test-mode-secret'         => 'Secreto de Modo de Prueba',
        'title'                    => 'Título',
    ],

    'response' => [
        'credentials-missing'  => '¡Faltan las credenciales de Razorpay!',
        'error-message'        => 'Ocurrió un error al cargar la pasarela de pago. Por favor, inténtelo de nuevo.',
        'razorpay-cancelled'   => 'El pago de Razorpay ha sido cancelado.',
        'something-went-wrong' => 'Algo salió mal',
    ],
];