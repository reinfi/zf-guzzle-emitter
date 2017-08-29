<?php

namespace Reinfi\GuzzleEmitter\Factory;

use Psr\Container\ContainerInterface;
use Reinfi\GuzzleEmitter\Builder\EmitterBuilder;
use Reinfi\GuzzleEmitter\Emitter;

/**
 * @package Reinfi\GuzzleEmitter\Factory
 */
class EmitterFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return Emitter
     */
    public function __invoke(ContainerInterface $container): Emitter
    {
        /** @var EmitterBuilder $builder */
        $builder = $container->get(EmitterBuilder::class);

        return $builder->build();
    }
}