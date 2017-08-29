<?php

namespace Reinfi\GuzzleEmitter\Builder;

use Psr\Container\ContainerInterface;
use Reinfi\GuzzleEmitter\Emitter;
use Zend\Config\Config;

/**
 * @package Reinfi\GuzzleEmitter\Builder
 */
class EmitterBuilder
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var SubscriberBuilder
     */
    private $subscriberBuilder;

    /**
     * @param Config $config
     * @param SubscriberBuilder $subscriberBuilder
     */
    public function __construct(
        Config $config,
        SubscriberBuilder $subscriberBuilder
    ) {
        $this->config = $config;
        $this->subscriberBuilder = $subscriberBuilder;
    }

    /**
     * @return Emitter
     */
    public function build(): Emitter
    {
        $emitter = new Emitter();

        if (!$this->hasSubscriber()) {
            return $emitter;
        }

        $this->attachSubscriber($emitter);

        return $emitter;
    }

    /**
     * @return bool
     */
    private function hasSubscriber(): bool
    {
        return $this->config->get('subscriber', false) !== false;
    }

    /**
     * @param Emitter $emitter
     */
    private function attachSubscriber(Emitter $emitter)
    {
        $subscribers = $this->config->subscriber->toArray();

        foreach ($subscribers as $subscriber) {
            $emitter->attach(
                $this->subscriberBuilder->build($subscriber)
            );
        }
    }
}