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
use Carbon\Carbon;


Route::get('/','homePageController@index');
Route::post('/','homePageController@laporkan')->name('lapor');
Route::get('/admin','parkirController@index')->name('adminPanel');
Route::post('/admin','parkirController@tambahKendaraan')->name('adminKendaraanTambah');
Route::put('/admin/keluar/{id}','parkirController@keluar')->name('adminKendaraanKeluar');
Route::get('/admin/daftar/parkir','parkirController@daftarKendaraan')->name('adminListParkir');
Route::get('/admin/daftar/lapor','parkirController@daftarLapor')->name('adminLapor');

Route::get('/day',function(){
  $day = Carbon::now();
  $date = $day->hour;
  var_dump($date);
});
