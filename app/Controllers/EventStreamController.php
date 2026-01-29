<?php

require_once __DIR__ . '/../Core/EventLogger.php';

/**
 * REAL-TIME EVENT STREAM API
 * --------------------------
 * Returns latest events as JSON.
 * Used by dashboard to poll system state.
 */

class EventStreamController
{
    public function index()
    {
        header('Content-Type: application/json');
        echo json_encode(EventLogger::read());
    }
}
