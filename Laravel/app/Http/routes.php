<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','homePageController@index');
Route::get('/admin','parkirController@index')->name('adminPanel');
Route::post('/admin','parkirController@tambahKendaraan')->name('adminKendaraanTambah');
Route::put('/admin/keluar/{id}','parkirController@keluar')->name('adminKendaraanKeluar');
Route::get('/admin/daftar','parkirController@daftarKendaraan')->name('adminListParkir');
