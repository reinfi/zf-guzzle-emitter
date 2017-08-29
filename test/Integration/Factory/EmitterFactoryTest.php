<?php

namespace Reinfi\GuzzleEmitter\Integration\Factory;

use GuzzleHttp\Event\Emitter;
use Reinfi\GuzzleEmitter\Config\ModuleConfig;
use Reinfi\GuzzleEmitter\Factory\EmitterFactory;
use Reinfi\GuzzleEmitter\Integration\AbstractIntegrationTest;

/**
 * @package Reinfi\GuzzleEmitter\Integration\Factory
 */
class EmitterFactoryTest extends AbstractIntegrationTest
{
    /**
     * @test
     */
    public function itCreatesEmitter()
    {
        $container = $this->getServiceManager(require __DIR__ . '/../../resources/config.php');

        $factory = new EmitterFactory();

        $emitter = $factory($container);

        $this->assertInstanceOf(Emitter::class, $emitter, 'instance should be of class '. Emitter::class);
    }

    /**
     * @test
     */
    public function itHasSubscriberAttached()
    {
        $container = $this->getServiceManager(require __DIR__ . '/../../resources/config.php');

        $factory = new EmitterFactory();

        $emitter = $factory($container);

        $this->assertTrue(
            $emitter->hasListeners('before'),
            'it should have listener on event before'
        );
    }

    /**
     * @test
     */
    public function itCreatesEmitterEvenIfNoSubscriberIsConfigured()
    {
        $config = require __DIR__ . '/../../resources/config.php';
        unset($config[ModuleConfig::MODULE_KEY]);
        $container = $this->getServiceManager($config);

        $factory = new EmitterFactory();

        $emitter = $factory($container);

        $this->assertInstanceOf(Emitter::class, $emitter, 'instance should be of class '. Emitter::class);
    }
}