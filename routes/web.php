<?php

use Illuminate\Support\Facades\Route;

Route::resource('/tareas', 'App\Http\Controllers\TaskController');

Route::post('/completa/{id}', [
    'uses' => 'App\Http\Controllers\TaskController@completa',
    'as' => 'completar.tarea'
]);