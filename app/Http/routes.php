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

Route::get('all','HomeController@allUsers');

Route::resource('user', 'UserController');
Route::resource('student', 'StudentController');
Route::resource('lecturer', 'LecturerController');
Route::resource('department', 'DepartmentController');
Route::resource('result', 'ResultController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


