<?php

require_once __DIR__ . '/../Core/Controller.php';
require_once __DIR__ . '/../Services/GamificationService.php';

/**
 * GAMIFICATION CONTROLLER
 * -----------------------
 * Displays gamification dashboard.
 */

class GamificationController extends Controller
{
    public function index(): void
    {
        $stats = (new GamificationService)->get();
        $this->view('gamification/index', compact('stats'));
    }
}
