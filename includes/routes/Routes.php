<?php

Route::set('index.php', function() {
    View::createView('home',[]);
});

Route::set('about-us', function() {
    View::createView('about-us',[]);
});