<?php

namespace Reinfi\GuzzleEmitter\Builder;

use GuzzleHttp\Event\SubscriberInterface;
use Psr\Container\ContainerInterface;

/**
 * @package Reinfi\GuzzleEmitter\Builder
 */
class SubscriberBuilder
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param string $className
     *
     * @return SubscriberInterface
     */
    public function build(string $className): SubscriberInterface
    {
        return $this->container->get($className);
    }

}