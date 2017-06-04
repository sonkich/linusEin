<?php


class Contacts extends Controller {


    public static function constructView() {

        $data['title'] = 'contacts';

        View::createView("contacts" ,$data);
    }
}