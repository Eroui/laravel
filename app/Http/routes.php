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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('admin', [
	'uses' => 'AdminController@admin',
	'as' => 'admin',
	'middleware' => 'admin'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




//Route::resource('files','FilemanagerLaravelController@getShow');
//Route::group(array('middleware' => 'auth'), function(){
  //  Route::controller('medias', 'FilemanagerLaravelController');
//});

Route::get('files', [
	'uses' => 'FilemanagerLaravelController@getShow',
	'as' => 'files',
]);  