<?php

/**
 * FRONT CONTROLLER
 * ----------------
 * This is the single entry point of the whole system.
 * Just like Laravel's public/index.php.
 * 
 * Responsibilities:
 * - Load core classes
 * - Register event listeners
 * - Register routes
 * - Dispatch the request
 */

require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Core/EventDispatcher.php';

// Domain events
require_once __DIR__ . '/../app/Domain/Events/TaskCompleted.php';

// Event listeners (observers)
require_once __DIR__ . '/../app/Domain/Observers/AnalyticsListener.php';
require_once __DIR__ . '/../app/Domain/Observers/GamificationListener.php';

// Controllers
require_once __DIR__ . '/../app/Controllers/PortalController.php';
require_once __DIR__ . '/../app/Controllers/GamificationController.php';

// Register Event Chains

require_once __DIR__ . '/../app/Domain/Events/XPRewarded.php';
require_once __DIR__ . '/../app/Domain/Events/LevelUp.php';
require_once __DIR__ . '/../app/Domain/Events/BadgeUnlocked.php';

require_once __DIR__ . '/../app/Domain/Observers/LevelListener.php';
require_once __DIR__ . '/../app/Domain/Observers/BadgeListener.php';






/**
 * EVENT REGISTRATION
 * ------------------
 * We bind events to listeners.
 * 
 * Meaning:
 * When TaskCompleted event happens,
 * run AnalyticsListener and GamificationListener automatically.
 */

EventDispatcher::listen(
    XPRewarded::class,
    [new LevelListener, 'handle']
);

EventDispatcher::listen(
    BadgeUnlocked::class,
    [new BadgeListener, 'handle']
);


EventDispatcher::listen(
    TaskCompleted::class,
    [new AnalyticsListener, 'handle']
);

EventDispatcher::listen(
    TaskCompleted::class,
    [new GamificationListener, 'handle']
);


/**
 * ROUTER INITIALIZATION
 */
$router = new Router;
require_once __DIR__ . '/../app/Controllers/EventMonitorController.php';

$router->get('/events', ['EventMonitorController', 'index']);

require_once __DIR__ . '/../app/Controllers/IntelligenceController.php';

$router->get('/intelligence', ['IntelligenceController', 'index']);



/**
 * ROUTE DEFINITIONS
 * -----------------
 * These define what URL triggers what controller method.
 */

$router->get('/', ['PortalController', 'index']);
$router->get('/test-event', ['PortalController', 'testEvent']);
$router->get('/gamification', ['GamificationController', 'index']);


/**
 * DISPATCH REQUEST
 * ----------------
 * Router finds matching route and runs its controller.
 */

$router->dispatch();
