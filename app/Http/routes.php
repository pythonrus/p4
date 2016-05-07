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

Route::group(['middleware' => ['web']], function() {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/movies', 'MovieController@getIndex');
    Route::get('/movie/create', 'MovieController@getCreate');
    Route::post('/movie/create', 'MovieController@postCreate');
    Route::get('/movie/{id}', 'MovieController@getShow');

});
