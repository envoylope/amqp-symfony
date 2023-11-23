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

namespace Envoylope\NytrisPlugin\Amqp;

use Asmblah\PhpAmqpCompat\AmqpCompatPackage;
use Envoylope\NytrisPlugin\Amqp\DependencyInjection\PhpAmqpCompatExtension;
use Envoylope\NytrisPlugin\Amqp\Package\Initialiser;
use Nytris\Bundle\Plugin\PluginInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class Plugin.
 *
 * Integrates PHP AMQP-Compat into Symfony.
 *
 * @author Dan Phillimore <dan@ovms.co>
 */
class Plugin implements PluginInterface
{
    /**
     * @inheritDoc
     */
    public function boot(ContainerInterface $container): void
    {
        $initialiser = $container->get(Initialiser::class, ContainerInterface::NULL_ON_INVALID_REFERENCE);

        if ($initialiser === null) {
            return; // Plugin was not configured.
        }

        $initialiser->initialise();
    }

    /**
     * @inheritDoc
     */
    public function build(ContainerBuilder $container): void
    {
        $container->registerExtension(new PhpAmqpCompatExtension());
    }

    /**
     * @inheritDoc
     */
    public function getPackageFqcn(): string
    {
        return AmqpCompatPackage::class;
    }
}
