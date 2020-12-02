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

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/register', 'UserController@create')->name('registrasi');
Route::post('/tambah', 'UserController@store');
Route::post('login','HomeController@login')->name('Login');

Route::get('/menu','UserController@index')->name('menu');

Route::get('/toko','TokoController@index')->name('toko');
Route::get('/registoko','TokoController@create')->name('registoko');
Route::post('/tambahtoko','TokoController@store');

Route::middleware(['checkUser'])->group(function () {
    Route::get('/logout','HomeController@logout')->name('Logout');
    Route::post('/order','OrderController@store');
});


