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
    Route::get('Kunjpasien', 'KunjunganPasienController@index')->name('Kunjpasien');
    Route::get('Kunjpasienpelayanan', 'KunjunganPasiPelayananController@index')->name('Kunjpasienpelayanan');
    Route::get('Kunjpasrajal', 'KunjunganPasRajalController@index')->name('Kunjpasrajal');
    Route::get('pengunjung', 'PengunjungController@index')->name('pengunjung');
    Route::get('pendpTunaiCB', 'PendapatanTunaiCBController@index')->name('pendpTunaiCB');
    Route::get('pendpTunai', 'PendapatanTunaiController@index')->name('pendpTunai');
    Route::get('pendpKlaim', 'PendapatanKlaimController@index')->name('pendpKlaim');
    // Route::get('pendpTunai/JMLTUNAI', 'PendapatanTunaiController@JMLTUNAI')->name('JMLTUNAI');
});
