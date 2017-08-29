<?php

namespace Reinfi\GuzzleEmitter\Builder\Factory;

use Psr\Container\ContainerInterface;
use Reinfi\GuzzleEmitter\Builder\EmitterBuilder;
use Reinfi\GuzzleEmitter\Builder\SubscriberBuilder;
use Reinfi\GuzzleEmitter\Config\ModuleConfig;
use Zend\Config\Config;

/**
 * @package Reinfi\GuzzleEmitter\Builder\Factory
 */
class EmitterBuilderFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return EmitterBuilder
     */
    public function __invoke(ContainerInterface $container): EmitterBuilder
    {
        /** @var Config $config */
        $config = $container->get(ModuleConfig::class);

        /** @var SubscriberBuilder $subscriberBuilder */
        $subscriberBuilder = $container->get(SubscriberBuilder::class);

        return new EmitterBuilder($config, $subscriberBuilder);
    }
}