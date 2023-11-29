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

namespace Envoylope\NytrisPlugin\Amqp\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * @author Dan Phillimore <dan@ovms.co>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        // Name must match alias generated from DI extension class PhpAmqpCompatExtension.
        $treeBuilder = new TreeBuilder('php_amqp_compat');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('logger')
                    ->children()
                        ->scalarNode('service')->end()
                        ->scalarNode('channel')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
