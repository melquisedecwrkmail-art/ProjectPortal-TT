<?php

class EventLogger
{
    public static function log(string $event, array $payload = []): void 
    {
        $record = [
            'time' => date('Y-m-d H:i:s'),
            'event' => $event,
            'data' => $payload
        ];

        file_put_contents(
            __DIR__ . '/../../storage/events.log',
            json_encode($record) . PHP_EOL,
            FILE_APPEND
        );
    }
}