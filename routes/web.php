<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::resource('/hargatelur', 'HargatelurController');

Route::resource('/laporanproduksi', 'LaporanProduksiController');

Route::resource('layer', 'LayerController');


// Route::get('/hargatelur', 'HargatelurController@index')->name('hargatelur');
// Route::get('/hargatelur/create', 'HargatelurController@create')->name('create-hargatelur');
// Route::post('/hargatelur', 'HargatelurController@store')->name('store-hargatelur');
// Route::get('/hargatelur/{slug}', 'HargatelurController@show');
// Route::get('/hargatelur/{id}/edit', 'HargatelurController@edit');
// Route::put('/hargatelur/{id}', 'HargatelurController@update');
// Route::delete('/hargatelur/{id}', 'HargatelurController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
