<?php

return [
    'baseUrl' => 'https://web.rbsuat.com/ab/rest',
    'operations' => [
        'register' => [
            'httpMethod' => 'POST',
            'uri' => '/register.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderNumber' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'amount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'currency' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'returnUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'failUrl' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'description' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'pageView' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'clientId' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'merchantLogin' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'jsonParams' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
                'sessionTimeoutSecs' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'expirationDate' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'bindingId' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'features' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'registerPreAuth' => [
            'httpMethod' => 'POST',
            'uri' => '/registerPreAuth.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderNumber' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'amount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'currency' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'returnUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'failUrl' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'description' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'pageView' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'clientId' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'merchantLogin' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'jsonParams' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
                'sessionTimeoutSecs' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'expirationDate' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'bindingId' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'features' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'deposit' => [
            'httpMethod' => 'POST',
            'uri' => '/deposit.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'amount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
            ],
        ],
        'getOrderStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/getOrderStatus.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'getOrderStatusExtended' => [
            'httpMethod' => 'POST',
            'uri' => '/getOrderStatusExtended.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderNumber' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'reverse' => [
            'httpMethod' => 'POST',
            'uri' => '/reverse.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'refund' => [
            'httpMethod' => 'POST',
            'uri' => '/refund.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'amount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
            ],
        ],
        'verifyEnrollment' => [
            'httpMethod' => 'POST',
            'uri' => '/verifyEnrollment.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'pan' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
            ],
        ],
        'addParams' => [
            'httpMethod' => 'POST',
            'uri' => '/addParams.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'params' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
            ],
        ],
        'getLastOrdersForMerchants' => [
            'httpMethod' => 'POST',
            'uri' => '/getLastOrdersForMerchants.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'page' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'size' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'from' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'to' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'transactionStates' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'merchants' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'searchByCreatedDate' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'paymentotherway' => [
            'httpMethod' => 'POST',
            'uri' => '/paymentotherway.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'MDORDER' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'paymentWay' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'paymentOrderBinding' => [
            'httpMethod' => 'POST',
            'uri' => '/paymentOrderBinding.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'mdOrder' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'bindingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'ip' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'cvc' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'email' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'unBindCard' => [
            'httpMethod' => 'POST',
            'uri' => '/unBindCard.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'bindingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'bindCard' => [
            'httpMethod' => 'POST',
            'uri' => '/bindCard.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'bindingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'extendBinding' => [
            'httpMethod' => 'POST',
            'uri' => '/extendBinding.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'bindingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'newExpiry' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'getBindings' => [
            'httpMethod' => 'POST',
            'uri' => '/getBindings.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'clientId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'getBindingsByCardOrId' => [
            'httpMethod' => 'POST',
            'uri' => '/getBindingsByCardOrId.do',
            'responseModel' => 'Result',
            'parameters' => [
                'userName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'pan' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'bindingId' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'showExpired' => [
                    'required' => false,
                    'type' => 'boolean',
                    'location' => 'formParam',
                ],
            ],
        ],
        'payment' => [
            'httpMethod' => 'POST',
            'uri' => '/payment.do',
            'responseModel' => 'Result',
            'parameters' => [
                'merchant' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'orderNumber' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'description' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'additionalParameters' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
                'clientId' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'preAuth' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'paymentToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
    ],
    'models' => [
        'Result' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json'
            ]
        ]
    ]
];
