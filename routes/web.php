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
Route::get('login','HomeController@login')->name('Login.get');

Route::middleware(['checkUser'])->group(function () {
    Route::get('/logout','HomeController@logout')->name('Logout');
});
