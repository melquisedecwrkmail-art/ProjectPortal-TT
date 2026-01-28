<?php

/**
 * EVENT: Level Up
 * ---------------
 * Fired when user levels up.
 */

class LevelUp
{
    public function __construct(
        public int $level
    ) {}
}
