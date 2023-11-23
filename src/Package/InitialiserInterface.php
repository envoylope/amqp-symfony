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

/**
 * Interface InitialiserInterface.
 *
 * Initialises PHP AMQP-Compat.
 *
 * @author Dan Phillimore <dan@ovms.co>
 */
interface InitialiserInterface
{
    /**
     * Initialises PHP AMQP-Compat.
     */
    public function initialise(): void;
}
