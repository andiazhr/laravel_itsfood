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
//menu
Route::resource('menu', 'MenuController');

//pembelian
Route::resource('itsfood', 'PembelianController');

Route::get('galery', 'PembelianController@galery');

Route::get('search', 'PembelianController@search');

Route::post('pesan', 'PembelianController@store');

Route::get('masuk', 'UsersPelangganController@index');

Route::get('daftar', 'UsersPelangganController@create');
Route::post('daftar', 'UsersPelangganController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
