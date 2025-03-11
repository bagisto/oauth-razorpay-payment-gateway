<?php

return [
    'admin' => [
        'razorpay' => [
            'connect'             => 'Conectar',
            'oauth-client-id'     => 'ID do Cliente OAuth',
            'oauth-client-secret' => 'Segredo do Cliente OAuth',
            'refresh'             => 'Atualizar',
            'title'               => 'Conexão OAuth do Razorpay',

            'response' => [
                'client-id-missing' => 'O ID do Cliente OAuth está ausente.',
                'no-auth-received'  => 'Nenhum código de autorização recebido.',
                'not-configured'    => 'As credenciais OAuth do Razorpay não estão configuradas.',
                'oauth-connected'   => 'Conexão OAuth do Razorpay bem-sucedida.',
                'setup-razorpay'    => 'Configure primeiro a Conexão OAuth do Razorpay.',
                'token-expired'     => "Não é possível processar este método de pagamento. Tente novamente mais tarde.",
                'token-failed'      => 'Falha na troca de token.',
                'token-refreshed'   => 'Token atualizado com sucesso.',
                'unexpected-error'  => 'Ocorreu um erro inesperado: ',
            ],
        ],
    ],

    'shop' => [
        'checkout' => [
            'razorpay' => [
                'process' => 'Por favor, aguarde, processando seu pedido...',
                'title'   => 'Pagamento com Razorpay',
            ],
        ],
    ],

    'configuration' => [
        'client-id'                => 'ID do Cliente',
        'client-secret'            => 'Segredo do Cliente',
        'description'              => 'Descrição',
        'info'                     => 'Razorpay é uma plataforma de tecnologia financeira que ajuda as empresas a aceitar, processar e distribuir pagamentos.',
        'merchant_desc'            => 'Descrição da Transação (exibida no formulário de pagamento)',
        'merchant_name'            => 'Nome do Comerciante (exibido no formulário de pagamento)',
        'name'                     => 'Razorpay',
        'oauth-client-id'          => 'ID do cliente OAuth',
        'oauth-client-secret'      => 'Segredo do cliente OAuth',
        'oauth-test-client-id'     => 'ID do cliente de teste OAuth',
        'oauth-test-client-secret' => 'Segredo do cliente de teste OAuth',
        'status'                   => 'Status',
        'test-mode-id'             => 'ID do Modo de Teste',
        'test-mode-secret'         => 'Segredo do Modo de Teste',
        'title'                    => 'Título',
    ],

    'response' => [
        'credentials-missing'  => 'As credenciais do Razorpay estão ausentes!',
        'error-message'        => 'Ocorreu um erro ao carregar o gateway de pagamento. Por favor, tente novamente.',
        'razorpay-cancelled'   => 'O pagamento do Razorpay foi cancelado.',
        'something-went-wrong' => 'Algo deu errado',
    ],
];