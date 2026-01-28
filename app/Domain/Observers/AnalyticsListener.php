<?php

/**
 * ANALYTICS LISTENER
 * ------------------
 * Reacts to TaskCompleted event.
 * Logs data for analytics tracking.
 */

class AnalyticsListener
{
    public function handle(TaskCompleted $event): void
    {
        file_put_contents(
            __DIR__ . '/../../../storage/analytics.log',
            date('Y-m-d H:i:s') . " | Task {$event->taskId} completed\n",
            FILE_APPEND
        );
    }
}
