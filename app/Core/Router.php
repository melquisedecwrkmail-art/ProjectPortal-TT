<?php

/**
 * ROUTER CLASS
 * ------------
 * Handles URL routing.
 * Works like Laravel routing system but simplified.
 */

class Router
{
    private array $routes = [];

    /**
     * Register GET routes
     */
    public function get(string $uri, array $action): void
    {
        $this->routes['GET'][$uri] = $action;
    }

    /**
     * Dispatch the request
     */
    public function dispatch(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        $action = $this->routes[$method][$uri] ?? null;

        if (!$action) {
            http_response_code(404);
            exit('404 | Module Not Found');
        }

        [$controller, $method] = $action;

        $instance = new $controller;
        call_user_func([$instance, $method]);
    }
}
