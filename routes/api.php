<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('cors')->group(function() {
    Route::get('ICDX', 'BesarICDXUtamaController@index')->name('ICDX');
    Route::get('ICDX/{tgl1}', 'BesarICDXUtamaController@index')->name('ICDX');
    Route::get('ICDX/{tgl1}/{tgl2}', 'BesarICDXUtamaController@index')->name('ICDX');
    Route::get('ICDX/{tgl1}/{tgl2}/{pilih}', 'BesarICDXUtamaController@index')->name('ICDX');
    Route::get('Kunjpasien', 'KunjunganPasienController@index')->name('Kunjpasien');
    Route::get('Kunjpasien/{tgl1}', 'KunjunganPasienController@index')->name('Kunjpasien');
    Route::get('Kunjpasien/{tgl1}/{tgl2}', 'KunjunganPasienController@index')->name('Kunjpasien');
    Route::get('Kunjpasienpelayanan', 'KunjunganPasPelayananController@index')->name('Kunjpasienpelayanan');
    Route::get('Kunjpasrajal', 'KunjunganPasRajalController@index')->name('Kunjpasrajal');
    Route::get('Kunjpasrajal/{tgl1}', 'KunjunganPasRajalController@index')->name('Kunjpasrajal');
    Route::get('Kunjpasrajal/{tgl1}/{tgl2}', 'KunjunganPasRajalController@index')->name('Kunjpasrajal');
    Route::get('Kunjpasrajal/{tgl1}/{tgl2}/{limit}', 'KunjunganPasRajalController@index')->name('Kunjpasrajal');
    Route::get('pengunjung', 'PengunjungController@index')->name('pengunjung');
    Route::get('pengunjung/{tgl1}', 'PengunjungController@index')->name('pengunjung');
    Route::get('pengunjung/{tgl1}/{tgl2}', 'PengunjungController@index')->name('pengunjung');
    Route::get('pendpTunaiCB', 'PendapatanTunaiCBController@index')->name('pendpTunaiCB');
    Route::get('pendpTunaiCB/{tgl1}', 'PendapatanTunaiCBController@index')->name('pendpTunaiCB');
    Route::get('pendpTunaiCB/{tgl1}/{tgl2}', 'PendapatanTunaiCBController@index')->name('pendpTunaiCB');
    Route::get('pendpTunai', 'PendapatanTunaiController@index')->name('pendpTunai');
    Route::get('pendpTunai/{tgl1}', 'PendapatanTunaiController@index')->name('pendpTunai');
    Route::get('pendpTunai/{tgl1}/{tgl2}', 'PendapatanTunaiController@index')->name('pendpTunai');
    Route::get('pendpKlaim/', 'PendapatanKlaimController@index')->name('pendpKlaim');
    Route::get('pendpKlaim/{tgl1}', 'PendapatanKlaimController@index')->name('pendpKlaim');
    Route::get('pendpKlaim/{tgl1}/{tgl2}', 'PendapatanKlaimController@index')->name('pendpKlaim');
    // Route::get('pendpTunai/JMLTUNAI', 'PendapatanTunaiController@JMLTUNAI')->name('JMLTUNAI');
});
