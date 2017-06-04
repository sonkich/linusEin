<?php

class Prices extends Controller {


    public static function constructView() {
        $data = [];

        $data['title'] =   'prices';

        View::createView('prices' ,$data);
    }
}