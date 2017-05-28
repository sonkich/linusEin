<?php

const TEMPLATE_DIR = './includes/Views/';

class View {

    public static function createView($viewName) {
        $data['viewContent'] = self::getViewByName($viewName);
        require_once( TEMPLATE_DIR . "master.phtml");
    }

    public static function getViewByName($viewName) {
        return include(TEMPLATE_DIR . $viewName . '.phtml');
    }
}