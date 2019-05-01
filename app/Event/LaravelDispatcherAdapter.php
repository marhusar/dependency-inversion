<?php

namespace App\Event;

class LaravelDispatcherAdapter implements Dispatcher
{
    /** @var  \Illuminate\Events\Dispatcher */
    private $dispatcher;

    /**
     * @param \Illuminate\Events\Dispatcher $dispatcher
     */
    public function __construct(\Illuminate\Events\Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * @param object|string $event
     * @param array         $payload
     */
    public function dispatch($event, $payload = [])
    {
        $this->dispatcher->dispatch($event, $payload, false);
    }
}