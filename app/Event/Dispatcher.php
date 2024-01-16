<?php

namespace App\Event;

interface Dispatcher
{
    /**
     * Fire an event and call the listeners.
     *
     * @param  string|object $event
     * @param  mixed         $payload
     *
     * @return array|null
     */
    public function dispatch($event, $payload = []);
}