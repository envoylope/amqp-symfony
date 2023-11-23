# Envoylope AMQP-Compat Symfony Nytris Plugin

[![Build Status](https://github.com/envoylope/amqp-symfony/workflows/CI/badge.svg)](https://github.com/envoylope/amqp-symfony/actions?query=workflow%3ACI)

Integrates [PHP AMQP-Compat][1] into a Symfony application.

## Usage
Install this package with Composer as a Nytris Symfony bundle plugin:

```shell
$ composer install envoylope/amqp-symfony nytris/bundle
```

### Configuring platform boot config

Once the Nytris package is configured, this plugin will be loaded:

`nytris.config.php`

```php
<?php

declare(strict_types=1);

use Envoylope\NytrisPlugin\Amqp\Plugin;
use Nytris\Boot\BootConfig;
use Nytris\Boot\PlatformConfig;

$bootConfig = new BootConfig(new PlatformConfig(__DIR__ . '/var/cache/nytris/'));

$bootConfig->installPackage(new Plugin([...]));

return $bootConfig;
```

## See also
- [PHP AMQP-Compat][1], which is used by this library.

[1]: https://github.com/asmblah/php-amqp-compat
