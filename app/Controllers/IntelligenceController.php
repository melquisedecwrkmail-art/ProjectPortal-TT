<?php

require_once __DIR__ . '/../Core/Controller.php';
require_once __DIR__ . '/../Services/IntelligenceEngine.php';

/**
 * INTELLIGENCE DASHBOARD CONTROLLER
 * ---------------------------------
 * Displays analytics & intelligence insights.
 */

class IntelligenceController extends Controller
{
    public function index(): void
    {
        $engine = new IntelligenceEngine;
        $insights = $engine->insights();

        $this->view('intelligence/index', compact('insights'));
    }
}
