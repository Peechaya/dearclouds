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
Route::get('cv', 'HomeController@showCv');
Route::get('webprojects', 'HomeController@showWebProjects');
Route::get('webtranslations', 'HomeController@showTranslations');
Route::get('fosterfamily', 'HomeController@showFoster');
Route::get('portfolio', 'ProjectController@portfolio');
Route::get('project/{id}', 'HomeController@showProject');

Route::get('admin', function()
{
	return View::make('admin');
});
Route::post('admin', 'UserController@postLogin');
Route::get('admin', 'HomeController@showAdmin');

Route::get('logout', 'UserController@getLogout');



// Filtre Admin
Route::group(array('before' => 'admin'), function()
{

	Route::resource('pages', 'PageController');
	Route::resource('projects', 'ProjectController');
	Route::resource('translations', 'TranslationController');
	Route::resource('fosters', 'FosterController');
	// Route::resource('admin', 'AdminController');

});

Route::get('jcrop', function()
{
    return View::make('jcrop')->with('file', 'files/'. Session::get('file'));
});
Route::post('jcrop', function()
{
    $quality = 90;

    $src  = Input::get('file');
    $img  = imagecreatefromjpeg($src);
    $dest = ImageCreateTrueColor(Input::get('w'),
        Input::get('h'));

    imagecopyresampled($dest, $img, 0, 0, Input::get('x'),
        Input::get('y'), Input::get('w'), Input::get('h'),
        Input::get('w'), Input::get('h'));
    imagejpeg($dest, $src, $quality);

    return "<img src='" . $src . "'>";
});
