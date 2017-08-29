<?php

namespace Reinfi\GuzzleEmitter;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * @package Reinfi\GuzzleEmitter
 */
class Module implements ConfigProviderInterface
{
    /**
     * @inheritDoc
     */
    public function getConfig(): array
    {
        return require __DIR__ . '/../config/module.config.php';
    }
}