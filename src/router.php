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

SimpleRouter::get('/users', [\App\Controllers\UserController::class, 'index']);
SimpleRouter::get('/users/{id}', [\App\Controllers\UserController::class, 'show']);

SimpleRouter::get('/tasks', [\App\Controllers\TaskController::class, 'index']);
SimpleRouter::get('/tasks/{id}', [\App\Controllers\TaskController::class, 'show']);


SimpleRouter::start();