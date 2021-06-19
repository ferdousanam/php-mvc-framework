<?php


namespace System\Core;


class Core
{
    public function __construct() {
        $uri = new URI();

        $className = config('app.controller_namespace') . ucfirst($uri->controller);
        $controller = new $className;
        if (method_exists($controller, $uri->method)) {
            $method = $uri->method;
            $controller->$method();
        }
    }
}
