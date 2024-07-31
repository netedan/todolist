<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', function() {
    return 'Hello world';
});

////SimpleRouter::any('/', function() {
//    return 'Hello world';
//});

SimpleRouter::get('/projects', [\App\Controllers\ProjectController::class, 'index']);
SimpleRouter::get('/projects/{id}', [\App\Controllers\ProjectController::class, 'show']);

SimpleRouter::start();

