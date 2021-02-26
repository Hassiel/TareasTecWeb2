<?php

use Illuminate\Support\Facades\Route;

Route::resource('/tareas', 'App\Http\Controllers\TaskController');

Route::post('completa', 'App\Http\Controllers\TaskController@completa');