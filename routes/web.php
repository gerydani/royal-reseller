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
Route::get('/', 'HomeController@index')->name('Home');
Route::get('/register', 'UserController@create')->name('registrasi');
Route::post('/tambah', 'UserController@store');
Route::post('login','HomeController@login')->name('Login');

// logout
Route::middleware(['checkUser'])->group(function () {
    Route::get('/logout','HomeController@logout')->name('Logout');
    Route::post('/order','OrderController@store');
});

Route::get('/menu','UserController@index')->name('menu');

//menu toko
Route::get('/toko','TokoController@index')->name('toko');
Route::get('/registoko','TokoController@create')->name('registoko');
Route::post('/tambahtoko','TokoController@store');

// menu produk
Route::get('/produk','ProdukController@index')->name('produk');
Route::get('/insertproduk','ProdukController@create')->name('tampro');
Route::post('/tambahproduk','ProdukController@store');
Route::delete('/deleteproduk/{id}','ProdukController@destroy')->name('produk.destroy');

//menu antrian
Route::get('/order','OrderController@index')->name('order.index');
Route::get('/inputorder','OrderController@create')->name('order.input');
Route::post('/updateorder/{id}','OrderController@update')->name('order.update');
