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
//Route::get('check', 'PageController@check');
Route::get('check_list', 'PageController@check_list');
Route::get('fetch', 'PageController@fetch');
Route::get('main', 'PageController@main');
Route::get('register', 'PageController@register');
Route::get('search', 'PageController@search');
Route::post('login', 'PageController@postLogin');
Route::get('login', 'PageController@getLogin');

Route::resource('check', 'CheckController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
