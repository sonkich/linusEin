<?php

require_once( './includes/_Globals.php' );
/*
 * By including routes/Routes.php we get access to the $Routes
 * array containing all of the valid routes for our app.
*/
require_once( './includes/routes/Routes.php' );

function __autoload($class_name) {
    if(file_exists('./includes/classes/'.$class_name.'.php')) {
        require_once './includes/classes/'.$class_name.'.php';
    } else if(file_exists('./includes/Controllers/'.$class_name.'.php')) {
        require_once  './includes/Controllers/'.$class_name.'.php';
    }
}
