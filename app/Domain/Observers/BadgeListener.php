<?php

/**
 * BADGE LISTENER
 * --------------
 * Reacts when badge is unlocked.
 */

class BadgeListener
{
    public function handle(BadgeUnlocked $event): void
    {
        echo "🏆 BADGE UNLOCKED: {$event->badge}<br>";
    }
}
