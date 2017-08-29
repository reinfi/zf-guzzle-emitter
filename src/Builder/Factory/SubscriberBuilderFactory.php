<?php

namespace Reinfi\GuzzleEmitter\Builder\Factory;

use Psr\Container\ContainerInterface;
use Reinfi\GuzzleEmitter\Builder\SubscriberBuilder;

/**
 * @package Reinfi\GuzzleEmitter\Builder\Factory
 */
class SubscriberBuilderFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return SubscriberBuilder
     */
    public function __invoke(ContainerInterface $container): SubscriberBuilder
    {
        return new SubscriberBuilder($container);
    }
}