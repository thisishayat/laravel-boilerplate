<?php
/**
 * Created by PhpStorm.
 * User: backend
 * Date: 5/28/18
 * Time: 2:24 PM
 */
Route::group(['prefix'=>'/{en}/v0.1/api/'],function () {
    Route::post('registration', 'WebController@signUp')->name('user.signup')->middleware('RouteTokenAccess');
    Route::post('login', 'WebController@logIn')->name('user.logIn')->middleware('RouteTokenAccess');
    Route::get('get-check', 'WebController@getCheck')->name('user.test')->middleware('web');
});