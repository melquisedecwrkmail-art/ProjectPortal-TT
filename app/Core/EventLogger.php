<?php

/**
 * EVENT LOGGER CORE
 * -----------------
 * Stores system events into persistent storage.
 * This allows real-time monitoring + historical replay.
 */

class EventLogger
{
    private static string $file = __DIR__ . '/../../storage/events.json';

    public static function log(string $event, array $data = []): void
    {
        if (!file_exists(self::$file)) {
            file_put_contents(self::$file, json_encode([], JSON_PRETTY_PRINT));
        }

        $events = json_decode(file_get_contents(self::$file), true);

        $events[] = [
            'time'  => date('H:i:s'),
            'event' => $event,
            'data'  => $data
        ];

        // Keep only last 100 events (prevents memory overload)
        $events = array_slice($events, -100);

        file_put_contents(self::$file, json_encode($events, JSON_PRETTY_PRINT));
    }

    public static function read(): array
    {
        if (!file_exists(self::$file)) return [];
        return json_decode(file_get_contents(self::$file), true) ?? [];
    }
}
