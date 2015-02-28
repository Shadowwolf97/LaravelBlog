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

Route::get('/setup', 'SetupController@index');

Route::group(['middleware' => 'CheckConfigured'], function() {
    //Routes only to be used if the application has been configured
    Route::get('/', 'HomeController@index');
});