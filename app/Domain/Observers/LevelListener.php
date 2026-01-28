<?php

/**
 * LEVEL LISTENER
 * --------------
 * Reacts when XP is rewarded.
 */

class LevelListener
{
    public function handle(XPRewarded $event): void
    {
        echo "⚡ XP REWARDED: {$event->xp}<br>";
    }
}
