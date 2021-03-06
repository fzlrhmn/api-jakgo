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
    return view('api-jakgo');
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

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth:api', 'throttle:150', 'cors']], function () {
    Auth::guard('api')->user();

    /**
     * -------------- PROTOTYPE ---------------
     */

    /**
     *
     * GET CCTV Balitower
     */
    //Route::get('/cctv/balitower', 'CctvController@getBalitowerCctv');

    /**
     * @params id
     * GET CCTV Balitower
     */
    //Route::get('/cctv/balitower/{id}', 'CctvController@getBalitowerCctvDetail');

    /**
     *
     */
    //Route::get('/cctv/bitek', 'ApiCctvBitekController@getCctvBitek');

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
     * GET List Kecamatan By Kode Kota$id
     */
    Route::get('/kecamatan/kota/{id}', 'GeoKecamatanController@getKecamatanByKodeKota');

    /**
     * GET List Kelurahan
     */
    Route::get('/kelurahan', 'GeoKelurahanController@getKelurahan');

    /**
     * GET List Kelurahan $id
     */
    Route::get('/kelurahan/{id}', 'GeoKelurahanController@getKelurahanById');

    /**
     * GET List Kelurahan By Kode Kecamatan $id
     */
    Route::get('/kelurahan/kecamatan/{id}', 'GeoKelurahanController@getKelurahanByKodeKecamatan');

    /**
     * GET List RW
     */
    Route::get('/rw', 'GeoRwController@getRw');

    /**
     * GET List RW $id
     */
    Route::get('/rw/{id}', 'GeoRwController@getRwById');

    /**
     * GET List RW By Kode Kelurahan $id
     */
    Route::get('/rw/kelurahan/{id}', 'GeoRwController@getRwByKodeKelurahan');

    /**
     * GET Museum
     */
    Route::get('/museum', 'PariwisataMuseumController@getMuseum');

    /**
     * GET Museum $id
     */
    Route::get('/museum/{id}', 'PariwisataMuseumController@getMuseumById');

    /**
     * GET Rumah Sakit Umum
     */
    Route::get('/rumahsakitumum', 'KesehatanRsuController@getRsu');

    /**
     * GET Rumah Sakit Umum $id
     */
    Route::get('/rumahsakitumum/{id}', 'KesehatanRsuController@getRsuById');

    /**
     * GET Rumah Sakit Khusus
     */
    Route::get('/rumahsakitkhusus', 'KesehatanRskController@getRsk');

    /**
     * GET Rumah Sakit Khusus $id
     */
    Route::get('/rumahsakitkhusus/{id}', 'KesehatanRskController@getRskById');

    /**
     * GET Puskesmas
     */
    Route::get('/puskesmas', 'KesehatanPuskesmasController@getPuskesmas');

    /**
     * GET Puskesmas $id
     */
    Route::get('/puskesmas/{id}', 'KesehatanPuskesmasController@getPuskesmasById');

    /**
     * GET rutebusway
     */
    Route::get('/rutebusway', 'TransportasiRuteBusway@getRuteBusway');

    /**
     * GET rutebusway $id
     */
    Route::get('/rutebusway/{id}', 'TransportasiRuteBusway@getRuteBuswayById');

    /**
     * GET haltebusway
     */
    //Route::get('/haltebusway', 'TransportasiHalteBusway@getHalteBusway');

    /**
     * GET TPS
     */
    Route::get('/tps', 'KebersihanTps@getTps');

    /**
     * GET TPS {id}
     */
    Route::get('/tps/{id}', 'KebersihanTps@getTpsById');

    /**
     * GET CCTV balitower
     */
    Route::get('/cctvbalitower', 'CctvBalitowerController@getCctvBalitower');

    /**
     * GET CCTV balitower{id}
     */
    Route::get('/cctvbalitower/{id}', 'CctvBalitowerController@getCctvBalitowerById');
});