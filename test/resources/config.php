<?php

return [
    'guzzle_emitter'  => [
        'subscriber' => [
            \Reinfi\GuzzleEmitter\Subscriber\TestSubscriber::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            \Reinfi\GuzzleEmitter\Subscriber\TestSubscriber::class => \Zend\ServiceManager\Factory\InvokableFactory::class,
        ],
    ],
];