<?php

Route::set('', function() {
    Home::constructView();
});

Route::set('home', function() {
    Home::constructView();
});
