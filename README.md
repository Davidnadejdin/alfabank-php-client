# alfabank-php-client

[![Latest Stable Version](https://poser.pugx.org/davidnadejdin/alfabank-php-client/v/stable?format=plastic)](https://packagist.org/packages/davidnadejdin/alfabank-php-client)
[![Total Downloads](https://poser.pugx.org/davidnadejdin/alfabank-php-client/downloads?format=plastic)](https://packagist.org/packages/davidnadejdin/alfabank-php-client)
[![Latest Unstable Version](https://poser.pugx.org/davidnadejdin/alfabank-php-client/v/unstable?format=plastic)](https://packagist.org/packages/davidnadejdin/alfabank-php-client)
[![License](https://poser.pugx.org/davidnadejdin/alfabank-php-client/license?format=plastic)](https://packagist.org/packages/davidnadejdin/alfabank-php-client)

Api client for Alfabank

## Installation

Install package through Composer

``` bash
$ composer require davidnadejdin/alfabank-php-client
```

### Example
```php
<?php

include 'vendor/autoload.php';

$client = new \Davidnadejdin\AlfabankClient\Client([
    'userName' => "123",
    'password' => "123"
]);

$client->register([]);

```

## Credits

- [David Nadejdin][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](LICENSE) for more information.

## Related packages
- [cavidnadejdin/alfabank-laravel](https://github.com/Davidnadejdin/alfabank-laravel) Laravel alfabank facade.

[link-author]: https://github.com/davidnadejdin
[link-contributors]: ../../contributors
