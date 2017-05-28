<?php

const HOME_VIEW_NAME = 'home';

class Home extends Controller {


    public static function constructView() {
        $data = [];

        $data['title'] =   'myTitle';

        View::createView('home' ,$data);
    }
}