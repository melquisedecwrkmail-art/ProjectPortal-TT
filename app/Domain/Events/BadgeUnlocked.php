<?php

/**
 * EVENT: Badge Unlocked
 * ---------------------
 * Fired when new badge is unlocked.
 */

class BadgeUnlocked
{
    public function __construct(
        public string $badge
    ) {}
}
