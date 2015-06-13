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
//Route::get('welcome', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('/', 'PageController@index');
Route::get('login', 'PageController@getLogin');
Route::post('login', 'PageController@postLogin');
Route::get('logout', 'PageController@getLogout');

Route::get('check_list', 'PageController@check_list');
Route::get('check_list_double', 'PageController@check_list_double');
Route::get('check_list_history', 'PageController@check_list_history');

Route::get('fetch', 'PageController@fetch');
Route::post('fetch', 'PageController@resetPassword');
Route::get('main', 'PageController@main');
Route::get('search', 'PageController@search');

Route::resource('check', 'CheckController');
