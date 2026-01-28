<?php

/**
 * EVENT DISPATCHER
 * ----------------
 * Implements Observer Pattern.
 * This is the HEART of our architecture.
 */

class EventDispatcher
{
    protected static array $listeners = [];

    /**
     * Register listener for event
     */
    public static function listen(string $event, callable $callback): void
    {
        self::$listeners[$event][] = $callback;
    }

    /**
     * Dispatch event
     */
    public static function dispatch(object $event): void
    {
        $eventName = get_class($event);

          if (!empty(self::$listeners[$eventName])) {
        foreach (self::$listeners[$eventName] as $listener) {
            $listener($event);
            }
        }
    }
}
