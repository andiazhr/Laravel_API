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

Route::middleware('cors')->group(function() {
    // Route::get('ICDX', 'BesarICDXUtamaController@index')->name('ICDX');
    // Route::get('Kunjpasien', 'KunjunganPasienController@index')->name('Kunjpasien');
    // Route::get('Kunjpasienpelayanan', 'KunjunganPasPelayananController@index')->name('Kunjpasienpelayanan');
    // Route::get('Kunjpasrajal', 'KunjunganPasRajalController@index')->name('Kunjpasrajal');
    // Route::get('pengunjung', 'PengunjungController@index')->name('pengunjung');
    // Route::get('pendpTunaiCB', 'PendapatanTunaiCBController@index')->name('pendpTunaiCB');
    // Route::get('pendpTunai', 'PendapatanTunaiController@index')->name('pendpTunai');
    // Route::get('pendpKlaim', 'PendapatanKlaimController@index')->name('pendpKlaim');
    // Route::get('pendpTunai/JMLTUNAI', 'PendapatanTunaiController@JMLTUNAI')->name('JMLTUNAI');
});
