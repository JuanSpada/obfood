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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/perfil', 'PerfilController@perfil');
Route::post('/perfil', 'PerfilController@update_usuario');
Route::get('/register', 'LinkController@registro');
Route::get('/contacto', 'LinkController@contacto');
Route::get('/faq', 'LinkController@faq');

