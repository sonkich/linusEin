<?php

const TEMPLATE_DIR = './includes/Views/';

class View {

    public static function createView($viewName,$data) {
        $data['viewContentName'] = $viewName;
        require_once( TEMPLATE_DIR . "master.phtml");
    }

    public static function getViewByName($viewName,$data = []) {
         include(TEMPLATE_DIR . $viewName . '.phtml');
    }
}