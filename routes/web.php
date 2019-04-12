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

Route::resource('pembelian', 'PembelianController');

Route::resource('admins', 'UsersController');

Route::resource('userspelanggan', 'UsersPelangganController');

Route::resource('saranmasukkan', 'SaranMasukkanController');

//pembelian
Route::prefix('itsfood')->group(function(){
    Route::resource('/', 'ItsfoodController');
    Route::get('/profil/{id_pelanggan}', 'ItsfoodController@profil')->name('profil');
    Route::get('/masuk', 'ItsfoodController@showLoginForm')->name('masuk');
    Route::post('/masuk', 'ItsfoodController@login')->name('masuk.submit');
    Route::get('/keluar', 'ItsfoodController@destroy')->name('keluar');
    Route::get('/daftar', 'ItsfoodController@create')->name('daftar');
    Route::post('/daftar', 'ItsfoodController@register')->name('daftar.submit');
    Route::get('/galery', 'ItsfoodController@galery')->name('galery');
    Route::get('/search', 'ItsfoodController@search')->name('search');
    Route::post('/twoitem', 'ItsfoodController@store')->name('twoitem');
    Route::get('/keranjang/{id_menu}', 'ItsfoodController@addKeranjang')->name('addkeranjang');
    Route::get('/keranjang', 'ItsfoodController@Keranjang')->name('keranjang');
    Route::get('/pesan', 'ItsfoodController@Pesan')->name('pesan');
    Route::post('/pesan', 'ItsfoodController@addPesan')->name('pesan.submit');
    Route::post('/', 'ItsfoodController@SaranMasukkan')->name('saranmasukkan');
    Route::get('/kurangi/{id_menu}', 'ItsfoodController@kurangiKeranjang')->name('kurangiSatu');
    Route::get('/hapus/{id_menu}', 'ItsfoodController@hapusKeranjang')->name('hapusSemua');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
