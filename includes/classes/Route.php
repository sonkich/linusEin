<?php

class Route {

    private static $validRoutes = array();

    public static function set($route, $function)
    {
        self::$validRoutes[$route] = [
            'callback' => $function
        ];
    }

    public static function invokeMethod()
    {
        $url = isset($_GET['url'])? $_GET['url']: '';
        $routeIsValid = false;

        foreach(self::$validRoutes as $key => $value) {
            if(strcmp($key,$url) === 0) {
                $routeIsValid = true;
                self::$validRoutes[$key]['callback']->__invoke();
            }
        }

        if(!$routeIsValid) {
            self::$validRoutes['404']['callback']->__invoke();
        }
    }
}