<?php

class Route {

    private static $validRoutes = array();

    public static function set($route, $function) {

        self::$validRoutes[] = $route;

        $url = isset($_GET['url'])? $_GET['url']: '';

        if($url == $route) {
            $function->__invoke();
        }
    }
}