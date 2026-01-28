<?php

/**
 * DOMAIN EVENT
 * ------------
 * Represents a business event: "Task was completed".
 */

class TaskCompleted
{
    public function __construct(
        public int $taskId
    ) {}
}
