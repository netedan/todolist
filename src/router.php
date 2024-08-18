<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once \App\ROOT_PATH . '/helper.php';

SimpleRouter::get('/', function () {
    redirect('/projects');
});

////SimpleRouter::any('/', function() {
//    return 'Hello world';
//});

SimpleRouter::get('/projects', [\App\Controllers\ProjectController::class, 'index']);
SimpleRouter::get('/projects/create', [\App\Controllers\ProjectController::class, 'create']);
SimpleRouter::get('/projects/{id}', [\App\Controllers\ProjectController::class, 'show']);
SimpleRouter::post('/projects/{id}/destroy', [\App\Controllers\ProjectController::class, 'destroy']);
SimpleRouter::post('/projects', [\App\Controllers\ProjectController::class, 'store']);
SimpleRouter::get('/projects/{id}/edit', [\App\Controllers\ProjectController::class, 'edit']);
SimpleRouter::post('/projects/{id}', [\App\Controllers\ProjectController::class, 'update']);

SimpleRouter::get('/users', [\App\Controllers\UserController::class, 'index']);
SimpleRouter::get('/users/create', [\App\Controllers\UserController::class, 'create']);
SimpleRouter::get('/users/{id}', [\App\Controllers\UserController::class, 'show']);
SimpleRouter::post('/users/{id}/destroy', [\App\Controllers\UserController::class, 'destroy']);
SimpleRouter::post('/users', [\App\Controllers\UserController::class, 'store']);
SimpleRouter::get('/users/{id}/edit', [\App\Controllers\UserController::class, 'edit']);
SimpleRouter::post('/users/{id}', [\App\Controllers\UserController::class, 'update']);

SimpleRouter::get('/tasks', [\App\Controllers\TaskController::class, 'index']);
SimpleRouter::get('/tasks/create', [\App\Controllers\TaskController::class, 'create']);
SimpleRouter::get('/tasks/{id}', [\App\Controllers\TaskController::class, 'show']);
SimpleRouter::post('/tasks/{id}/destroy', [\App\Controllers\TaskController::class, 'destroy']);
SimpleRouter::post('/tasks', [\App\Controllers\TaskController::class, 'store']);
SimpleRouter::get('tasks/{id}/edit', [\App\Controllers\TaskController::class, 'edit']);
SimpleRouter::post('tasks/{id}', [\App\Controllers\TaskController::class, 'update']);

SimpleRouter::get('/tags', [\App\Controllers\TagController::class, 'index']);
SimpleRouter::get('/tags/create', [\App\Controllers\TagController::class, 'create']);
SimpleRouter::get('/tags/{id}', [\App\Controllers\TagController::class, 'show']);
SimpleRouter::post('/tags/{id}/destroy', [\App\Controllers\TagController::class, 'destroy']);
SimpleRouter::post('/tags', [\App\Controllers\TagController::class, 'store']);
SimpleRouter::get('/tags/{id}/edit', [\App\Controllers\TagController::class, 'edit']);
SimpleRouter::post('/tags/{id}', [\App\Controllers\TagController::class, 'update']);


SimpleRouter::start();