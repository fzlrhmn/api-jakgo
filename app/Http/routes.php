<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(
    ['prefix' => 'api/v1', 'middleware' => ['auth:api', 'throttle:150']], function () {
    Auth::guard('api')->user();

    /**
     * -------------- PROTOTYPE ---------------
     */

    /**
     *
     * GET CCTV Balitower
     */
    Route::get('/cctv/balitower', 'CctvController@getBalitowerCctv');

    /**
     * @params id
     * GET CCTV Balitower
     */
    Route::get('/cctv/balitower/{id}', 'CctvController@getBalitowerCctvDetail');

    /**
     *
     */
    Route::get('/musrenbang/2014', 'MusrenbangController@getMusrenbang2014');

    /**
     *
     */
    Route::get('/musrenbang/2015', 'MusrenbangController@getMusrenbang2015');

    /**
     *
     */
    Route::get('/cctv/bitek', 'ApiCctvBitekController@getCctvBitek');

    /**
     *
     */
    Route::get('/rutebusway', 'RuteBuswayController@getRuteBusway');

    /**
     * -------------- STABLE ---------------
     */

    /**
     * GET List Kota
     */
    Route::get('/kota', 'GeoKotaController@getKota');

    /**
     * GET List Kota $kode_kota
     */
    Route::get('/kota/{id}', 'GeoKotaController@getKotaById');

    /**
     * GET List Kecamatan
     */
    Route::get('/kecamatan', 'GeoKecamatanController@getKecamatan');

    /**
     * GET List Kecamatan $id
     */
    Route::get('/kecamatan/{id}', 'GeoKecamatanController@getKecamatanById');

    /**
     * GET List Kelurahan
     */
    Route::get('/kelurahan', 'GeoKelurahanController@getKelurahan');

    /**
     * GET List Kelurahan $id
     */
    Route::get('/kelurahan/{id}', 'GeoKelurahanController@getKelurahanById');

    /**
     * GET List RW
     */
    Route::get('/rw', 'GeoRwController@getRw');

    /**
     * GET List RW $id
     */
    Route::get('/rw/{id}', 'GeoRwController@getRwById');

    /**
     * GET Museum
     */
    Route::get('/museum', 'PariwisataMuseumController@getMuseum');

    /**
     * GET Museum $id
     */
    Route::get('/museum/{id}', 'PariwisataMuseumController@getMuseumById');
});