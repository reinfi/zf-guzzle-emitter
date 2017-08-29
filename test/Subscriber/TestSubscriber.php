<?php

namespace Reinfi\GuzzleEmitter\Subscriber;

use GuzzleHttp\Event\BeforeEvent;
use GuzzleHttp\Event\SubscriberInterface;

/**
 * @package Reinfi\GuzzleEmitter\Subscriber
 */
class TestSubscriber implements SubscriberInterface
{
    /**
     * @return array
     */
    public function getEvents()
    {
        return [
            'before'   => ['onBefore', 100],
        ];
    }

    /**
     * @param BeforeEvent $event
     * @param             $name
     */
    public function onBefore(BeforeEvent $event, $name)
    {
        echo 'Before!';
    }
}