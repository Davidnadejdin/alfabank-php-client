<?php

namespace Davidnadejdin\AlfabankClient;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;
use function realpath;

/**
 * Class Client
 * @package Davidnadejdin\AlfabankClient
 * @method register(array $params)
 * @method registerPreAuth(array $params)
 * @method deposit(array $params)
 * @method getOrderStatus(array $params)
 * @method getOrderStatusExtended(array $params)
 * @method reverse(array $params)
 * @method refund(array $params)
 * @method verifyEnrollment(array $params)
 * @method addParams(array $params)
 * @method getLastOrdersForMerchants(array $params)
 * @method paymentotherway(array $params)
 * @method paymentOrderBinding(array $params)
 * @method unBindCard(array $params)
 * @method bindCard(array $params)
 * @method extendBinding(array $params)
 * @method getBindings(array $params)
 * @method getBindingsByCardOrId(array $params)
 * @method payment(array $params)
 */
class Client extends GuzzleClient
{
    public function __construct()
    {
        parent::__construct(
            new HttpClient(),
            new Description(include realpath(__DIR__ . '/description.php')),
            null,
            null,
            null,
            []
        );
    }
}
