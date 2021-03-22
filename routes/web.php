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

Route::get('/', [
    'uses' => 'App\Http\Controllers\HomeController@mainSite',
    'as' => 'index'
]);


Auth::routes();

Route::group(['middleware' => 'auth'], function(){
 Route::resource('proyectos', 'App\Http\Controllers\ProyectController');
 Route::resource('/tareas', 'App\Http\Controllers\TaskController');

 Route::post('/completa/{id}', [
    'uses' => 'App\Http\Controllers\TaskController@completa',
    'as' => 'completar.tarea'
    ]);


Route::get('/admin', [
    'uses' => 'App\Http\Controllers\HomeController@index',
    'as' => 'home'
    ]);

});

