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
Route::get('register', 'PageController@register');
Route::get('login', 'PageController@getLogin');
Route::get('logout', 'PageController@getLogout');
Route::post('login', 'PageController@postLogin');

Route::get('show', ['middleware' => 'auth', 'uses' => 'PageController@showProfile']);
Route::get('check_list', ['middleware' => 'auth', 'uses' => 'PageController@check_list']);
Route::get('fetch', ['middleware' => 'auth', 'uses' => 'PageController@fetch']);
Route::get('main', ['middleware' => 'auth', 'uses' => 'PageController@main']);
Route::get('search', ['middleware' => 'auth', 'uses' => 'PageController@search']);

Route::resource('check', 'CheckController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
