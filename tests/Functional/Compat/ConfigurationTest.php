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

namespace Envoylope\NytrisPlugin\Amqp\Tests\Functional\Compat;

use Asmblah\PhpAmqpCompat\AmqpManager;
use Envoylope\NytrisPlugin\Amqp\Tests\Functional\AbstractKernelTestCase;
use Envoylope\NytrisPlugin\Amqp\Tests\Functional\Util\TestLogger;
use Symfony\Bridge\Monolog\Logger as MonologLogger;

/**
 * Class ConfigurationTest.
 *
 * @author Dan Phillimore <dan@ovms.co>
 */
class ConfigurationTest extends AbstractKernelTestCase
{
    public function testLoggerIsSetWhenConfigured(): void
    {
        static::bootKernel(['environment' => 'explicit_logger']);

        static::assertInstanceOf(TestLogger::class, AmqpManager::getConfiguration()->getLogger());
    }

    public function testChannelIsSetWhenConfigured(): void
    {
        static::bootKernel(['environment' => 'explicit_channel']);

        $logger = AmqpManager::getConfiguration()->getLogger();

        static::assertInstanceOf(MonologLogger::class, $logger);
        static::assertSame('my_channel', $logger->getName());
    }

    public function testDefaultMonologLoggerIsUsedWhenNotConfigured(): void
    {
        static::bootKernel(['environment' => 'not_configured']);

        static::assertInstanceOf(MonologLogger::class, AmqpManager::getConfiguration()->getLogger());
    }
}
