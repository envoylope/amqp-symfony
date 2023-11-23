<?php

/*
 * Envoylope AMQP-Compat Symfony Nytris Plugin
 * Copyright (c) Dan Phillimore (asmblah)
 * https://github.com/envoylope/amqp-symfony/
 *
 * Released under the MIT license.
 * https://github.com/envoylope/amqp-symfony/raw/main/MIT-LICENSE.txt
 */

declare(strict_types=1);

use Asmblah\PhpAmqpCompat\AmqpCompatPackage;
use Envoylope\NytrisPlugin\Amqp\Plugin;
use Nytris\Boot\BootConfig;
use Nytris\Boot\PlatformConfig;
use Nytris\Bundle\Plugin\PluginRepository;
use Nytris\Nytris;

require_once __DIR__ . '/../vendor/autoload.php';

Mockery::globalHelpers();

$bootConfig = new BootConfig(new PlatformConfig(dirname(__DIR__) . '/var/nytris/'));
$bootConfig->installPackage(new AmqpCompatPackage());
Nytris::boot($bootConfig);

PluginRepository::installPlugin(new Plugin());
