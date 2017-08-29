<?php

namespace Reinfi\GuzzleEmitter\Integration;

use Reinfi\GuzzleEmitter\Emitter;

/**
 * @package Reinfi\GuzzleEmitter\Integration
 */
class EmitterTest extends AbstractIntegrationTest
{
    /**
     * @test
     */
    public function itCreatesEmitter()
    {
        $container = $this->getServiceManager(require __DIR__ . '/../resources/config.php');

        $emitter = $container->get(Emitter::class);

        $this->assertInstanceOf(Emitter::class, $emitter, 'instance should be of class '. Emitter::class);
    }
}