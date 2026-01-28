<?php

/**
 * USER STATS ENTITY
 * -----------------
 * Represents player progression.
 */

class UserStats
{
    public int $xp = 0;
    public int $level = 1;
    public int $streak = 0;
    public array $badges = [];

    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public static function fromArray(array $data): UserStats
    {
        $stats = new self;

        foreach ($data as $key => $value) {
            $stats->$key = $value;
        }

        return $stats;
    }
}
