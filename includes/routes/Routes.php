<?php

Route::set('', function() {
    Home::constructView();
});

Route::set('home', function() {
    Home::constructView();
});

Route::set('404', function() {
    View::createView('404',[]);
});

Route::invokeMethod();