<?php

namespace Davidnadejdin\AlfabankClient;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;
use function realpath;

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
