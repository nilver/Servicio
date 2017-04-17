<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@getHome');


Route::get('/auth/login', function () {
    return  'Login Usuario';
});


Route::get('/list', function () {
    return  view('list');
});


Route::get('/create', function () {
    return  'Crear Evento';
});
Route::get('/edit/{id}', function () {
    return  'Editar Evento {id}';
});
