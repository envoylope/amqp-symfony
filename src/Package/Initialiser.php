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

namespace Envoylope\NytrisPlugin\Amqp\Package;

use Asmblah\PhpAmqpCompat\AmqpManager;
use Asmblah\PhpAmqpCompat\Configuration\Configuration;
use Psr\Log\LoggerInterface;

/**
 * Class Initialiser.
 *
 * Initialises PHP AMQP-Compat.
 *
 * @author Dan Phillimore <dan@ovms.co>
 */
class Initialiser implements InitialiserInterface
{
    public function __construct(
        private readonly LoggerInterface $logger
    ) {
    }

    /**
     * @inheritDoc
     */
    public function initialise(): void
    {
        AmqpManager::setConfiguration(new Configuration(logger: $this->logger));
    }
}
