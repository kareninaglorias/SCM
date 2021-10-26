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

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/perekayasa', 'UserController@index')->name('perekayasa');
    Route::get('/pabrik', 'UserController@pabrik')->name('pabrik');
    Route::get('/pesananoutlet', 'PabrikController@pesanan')->name('pesananoutlet');
    Route::get('/stokpabrik', 'UserController@stok')->name('stokpabrik');
    Route::get('/outlet', 'UserController@outlet')->name('outlet');
    Route::get('/tambahpesanan', 'OutletController@pesanan')->name('tambahpesanan');
    Route::get('/datapesanan', 'OutletController@data')->name('datapesanan');
    Route::post('/tambah-data-pesanan', 'OutletController@tambah_data_pesanan');
    Route::get('/tambahrekayasa', 'RekayasaController@index')->name('tambahrekayasa');
    Route::post('/tambah-data-rekayasa', 'RekayasaController@tambah_data_rekayasa');
    Route::get('/datapengajuan', 'RekayasaController@data')->name('datapengajuan');
    Route::get('/proseskirim{id}', 'RekayasaController@proseskirim');
    Route::get('/tambahpengajuan', 'PabrikController@index')->name('tambahpengajuan');
    Route::post('/tambah-data-pengajuan', 'PabrikController@tambah_data_pengajuan');
    Route::get('/statuspengajuan', 'PabrikController@status')->name('statuspengajuan');
    Route::get('/diterima{id}', 'PabrikController@diterima');
    Route::get('/proseskirim{id}', 'PabrikController@proseskirim');
    Route::get('/tambahstok', 'PabrikController@stok')->name('tambahstok');
    Route::post('/tambah-data-stok', 'PabrikController@tambah_data_stok');

});