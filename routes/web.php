<?php

use Illuminate\Support\Facades\Route;

Route::resource('/tareas', 'App\Http\Controllers\TaskController');

Route::post('/completa/{id}', [
    'uses' => 'App\Http\Controllers\TaskController@completa',
    'as' => 'completar.tarea'
]);

/*Ejemplo de rutas -------

Route::resource();

Route::get();
Route::post();
Route::put();
Route::delete();
--- */

Route::resource('/proyectos', 'App\Http\Controllers\ProyectController');

