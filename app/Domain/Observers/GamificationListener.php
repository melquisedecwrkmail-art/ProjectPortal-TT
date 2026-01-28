<?php

require_once __DIR__ . '/../../Services/GamificationService.php';

/**
 * GAMIFICATION LISTENER
 * ---------------------
 * Reacts to TaskCompleted event.
 * Rewards XP, updates streak & badges.
 */

class GamificationListener
{
    public function handle(TaskCompleted $event): void
    {
        (new GamificationService)->reward();
    }
}
