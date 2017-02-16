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

Route::get('/', 'HomeController@showIndex');
Route::get('portfolio', 'ProjectController@portfolio');
Route::get('projects', 'ProjectController@index');

Route::get('admin', function()
{
	return View::make('admin');
});
Route::post('admin', 'UserController@postLogin');
Route::get('logout', 'UserController@getLogout');

// Filtre Admin
Route::group(array('before' => 'admin'), function()
{

	Route::resource('pages', 'PageController');
	Route::resource('projects', 'ProjectController');
	Route::resource('users', 'UserController');
	// Route::resource('admin', 'AdminController');

});
