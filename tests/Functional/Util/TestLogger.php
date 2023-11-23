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

namespace Envoylope\NytrisPlugin\Amqp\Tests\Functional\Util;

use Psr\Log\AbstractLogger;
use Stringable;

/**
 * Class TestLogger.
 *
 * Logger that is solely used during functional testing of the plugin.
 *
 * @author Dan Phillimore <dan@ovms.co>
 */
class TestLogger extends AbstractLogger
{
    /**
     * @var array<array<mixed>>
     */
    private array $logs = [];

    /**
     * Fetches the recorded logs.
     *
     * @return array<array<mixed>>
     */
    public function getLogs(): array
    {
        return $this->logs;
    }

    /**
     * @inheritDoc
     *
     * @param array<mixed> $context
     */
    public function log($level, Stringable|string $message, array $context = [])
    {
        $this->logs[] = [$level, $message, $context];
    }
}
