<?php

return [
    'service_manager' => [
        'factories' => [
            \Reinfi\GuzzleEmitter\Config\ModuleConfig::class       => \Reinfi\GuzzleEmitter\Config\Factory\ModuleConfigFactory::class,
            \Reinfi\GuzzleEmitter\Builder\SubscriberBuilder::class => \Reinfi\GuzzleEmitter\Builder\Factory\SubscriberBuilderFactory::class,
            \Reinfi\GuzzleEmitter\Builder\EmitterBuilder::class    => \Reinfi\GuzzleEmitter\Builder\Factory\EmitterBuilderFactory::class,
            \Reinfi\GuzzleEmitter\Emitter::class                   => \Reinfi\GuzzleEmitter\Factory\EmitterFactory::class,
        ],
    ],
];