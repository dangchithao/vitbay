<?php

class Router {
    // Run application
    public static function Run($controllerName = "home", $actionName = "index") {
        if (!empty($_REQUEST['c'])) {
            $controllerName = $_REQUEST['c'];
        }

        if (!empty($_REQUEST['a'])) {
            $actionName = $_REQUEST['a'];
        }

        $controller = ucfirst($controllerName) . "Controller";
        $action = strtolower($actionName) . "Action";

        // Check class exists, if does exist this method then redirect to page not found.
        if (!class_exists($controller)) {
            // Tools::redirect($url);
            echo "404 - Page not found.";
            exit;
        }

        // Construct page
        $controllerInstance = new $controller();

        // Check exist method, if does exist this method then redirect to page not found.
        if (!method_exists($controllerInstance, $action)) {
            // Tools::redirect($url);
            echo "404 - Page not found.";
            exit;
        }

        // execute action 
        $controllerInstance->$action();
    }

}
