<?php   

require_once __DIR__ . '/../Core/Controller.php';

class EventMonitorController extends Controller
{
    public function index(): void 
    {
        $logFile = __DIR__ . '/../../storage/events.log';

        $events = file_exists($logFile)
        ? array_reverse(array_filter(array_map('json_decode', file($logFile))))
        :[];

        $this->view('event-monitor/index', compact('events'));
    }
}