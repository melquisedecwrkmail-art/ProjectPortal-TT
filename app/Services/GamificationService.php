<?php

require_once __DIR__ . '/../Domain/Entities/UserStats.php';

/**
 * GAMIFICATION ENGINE
 * -------------------
 * Handles XP, levels, streaks, and badges.
 */

class GamificationService
{
    private string $file;

    public function __construct()
    {
        $this->file = __DIR__ . '/../../storage/user_stats.json';

        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode((new UserStats)->toArray(), JSON_PRETTY_PRINT));
        }
    }

    private function read(): UserStats
    {
        return UserStats::fromArray(
            json_decode(file_get_contents($this->file), true) ?? []
        );
    }

    private function write(UserStats $stats): void
    {
        file_put_contents($this->file, json_encode($stats->toArray(), JSON_PRETTY_PRINT));
    }

    /**
     * Reward system logic
     */
    public function reward(): void
    {
        $stats = $this->read();

        $stats->xp += 20;
        EventDispatcher::dispatch(new XPRewarded(20));
        $stats->streak++;

        if ($stats->xp >= ($stats->level * 100)) {
            $stats->xp = 0;
            $stats->level++;

            EventDispatcher::dispatch(
                new LevelUp($stats->level)
            );
        }

        $this->checkBadges($stats);
        $this->write($stats);
    }

    private function checkBadges(UserStats $stats): void
    {
        $badges = [
            3  => '3-Day Streak',
            7  => '7-Day Streak',
            14 => '14-Day Streak',
            30 => '30-Day Streak'
        ];

        foreach ($badges as $days => $badge) {
            if ($stats->streak >= $days && !in_array($badge, $stats->badges)) {
                $stats->badges[] = $badge;
            }
        }
        EventDispatcher::dispatch(
            new BadgeUnlocked($badge)
        );
    }

    public function get(): UserStats
    {
        return $this->read();
    }
}
