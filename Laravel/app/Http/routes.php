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

/// Halaman Untuk User
Route::get('/','homePageController@index');
Route::post('/','homePageController@laporkan')->name('lapor');

/// Halaman Untuk Admin
Route::get('/admin','parkirController@index')->name('adminPanel');
Route::post('/admin','parkirController@tambahKendaraan')->name('adminKendaraanTambah');
Route::get('/admin/cari','parkirController@cariKendaraan')->name('adminCariKendaraan');
Route::get('/admin/keluar/{id}','parkirController@keluar')->name('adminKendaraanKeluar');
Route::get('/admin/edit/{id}','parkirController@viewEditKendaraan')->name('tampilanEdit');
Route::put('/admin/edit/{id}','parkirController@editKendaraan')->name('edit');
Route::get('/admin/daftar/parkir','parkirController@daftarKendaraan')->name('adminListParkir');
Route::get('/admin/daftar/lapor','parkirController@daftarLapor')->name('adminLapor');
Route::get('/admin/panduan','parkirController@panduanPARKIRKU')->name('panduan');


/// Percobaan
Route::get('/day',function(){
  $day = Carbon::now();
  $date = $day->hour;
  var_dump($date);
});
