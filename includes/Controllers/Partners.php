<?php

class Partners extends Controller {


    public static function constructView() {
        $data = [];

        $data['title'] =   'partners';

        View::createView('partners' ,$data);
    }
}