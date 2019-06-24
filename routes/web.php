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
    return view('/auth/login');
});

Route::get('/usuario', function () {
    return view('usuario');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario','UsuarioController@showUsers')->name('usuario');
Route::post('/deleteUser','UsuarioController@deleteUser');
