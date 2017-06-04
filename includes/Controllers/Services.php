<?php


class Services extends Controller {


    public static function constructView($name, $data = []) {

        $data['title'] = $name;

        View::createView("services_$name" ,$data);
    }
}