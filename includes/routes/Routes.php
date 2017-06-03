<?php

Route::set('', function() {
    Home::constructView();
});

Route::set('home', function() {
    Home::constructView();
});

Route::set('services/office', function() {
    Services::constructView('office');
});

Route::set('services/home', function() {
    Services::constructView('home');
});

Route::set('services/wash', function() {
    Services::constructView('wash');
});

Route::set('services/renovation-clean', function() {
    Services::constructView('renovation-clean');
});

Route::set('prices', function() {
    Home::constructView();
});

Route::set('contacts', function() {
    Home::constructView();
});

Route::set('partners', function() {
    Home::constructView();
});

Route::set('404', function() {
    View::createView('404',[]);
});

Route::invokeMethod();