<?php

require_once __DIR__ . '/../Core/Controller.php';

/**
 * PORTAL CONTROLLER
 * -----------------
 * Controls the main landing page.
 */

class PortalController extends Controller
{
    public function index(): void
    {
        $this->view('portal');
    }

    public function testEvent(): void
    {
        EventDispatcher::dispatch(
            new TaskCompleted(rand(1, 999))
        );

        echo "⚡ EVENT DISPATCHED";
    }
}
