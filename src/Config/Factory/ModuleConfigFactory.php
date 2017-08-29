<?php

namespace Reinfi\GuzzleEmitter\Config\Factory;

use Psr\Container\ContainerInterface;
use Reinfi\GuzzleEmitter\Config\ModuleConfig;
use Zend\Config\Config;

/**
 * @package Reinfi\GuzzleEmitter\Config\Factory
 */
class ModuleConfigFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return Config
     */
    public function __invoke(ContainerInterface $container): Config
    {
        /** @var array $config */
        $config = $container->get('config');

        return new Config($config[ModuleConfig::MODULE_KEY] ?? []);
    }
}