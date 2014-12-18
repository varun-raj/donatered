<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showHome'));

Route::post('donor/new', array('as' => 'donor-new', 'uses' => 'DonorsController@store'));


Route::post('donor/search', array('as' => 'donor-search', 'uses' => 'DonorsController@find'));
