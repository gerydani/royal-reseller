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

// login dan register

use App\Http\Controllers\UserController;

Route::get('/', 'HomeController@index')->name('Home');
Route::post('login','HomeController@login')->name('Login');
Route::get('/aturan', 'HomeController@create')->name('input.aturan');
Route::post('/postaturan', 'HomeController@store')->name('store.aturan');
Route::get('/register', 'UserController@create')->name('registrasi');
Route::post('/tambah', 'UserController@store');
Route::get('/editprofile/{$id}', 'UserController@edit')->name('edit.profile');
Route::post('/updateprofile/{$id}', 'UserController@update')->name('update.profile');

// logout
Route::middleware(['checkUser'])->group(function () {
    Route::get('/logout','HomeController@logout')->name('Logout');
});

    // Resources
    Route::resources([
        // Employee
        'toko' => 'TokoController',
        // Modul Management
        'product' => 'ProductController',
        // Sub Modul Management
        'order' => 'OrderController',
        // Role Management
    ]);
Route::get('/menu','UserController@index')->name('menu');

// //menu toko
// Route::get('/toko','TokoController@index')->name('toko');
// Route::get('/registoko','TokoController@create')->name('registoko');
// Route::post('/tambahtoko','TokoController@store');

Route::middleware(['checkUser'])->group(function () {
    Route::get('/logout','HomeController@logout')->name('Logout');
});

Route::post('/create','UserController@createaturan')->name('buat');
Route::get('/dashboard','UserController@aturan')->name('aturan');

// Route::get('/profile','UserController@ubah')->name('profile');

// // menu produk
// Route::get('/produk','ProdukController@index')->name('produk');
// Route::get('/insertproduk','ProdukController@create')->name('tampro');
// Route::post('/tambahproduk','ProdukController@store');
// Route::delete('/deleteproduk/{id}','ProdukController@destroy')->name('produk.destroy');

// // menu produk
// Route::get('/produk','ProductController@index')->name('produk');
// Route::get('/insertproduk','ProductController@create')->name('tampro');
// Route::post('/tambahproduk','ProductController@store');
// Route::delete('/deleteproduk/{id}','ProductController@destroy')->name('produk.destroy');


// //menu antrian
// Route::get('/order','OrderController@index')->name('order.index');
// Route::get('/inputorder','OrderController@create')->name('order.input');
// Route::post('/updateorder/{id}','OrderController@update')->name('order.update');
// Route::get('/coba','UserController@index')->name('coba');
