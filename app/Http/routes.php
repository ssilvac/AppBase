<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
	return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web']], function () {

	#rutas basicas para autentificación
	Route::auth();

	# Rura para confirmar email
	Route::get('confirmation/{token}', 'Auth\AuthController@getConfirmation')->name('confirmation');

	/**
	 * Rutas donde se puede acceder solo iniciando sesión
	 */

	Route::group(['middleware' => 'auth'], function () {

		Route::get('/home', [
			'uses' => 'HomeController@index',
			'as' => 'home',
		]);

		# debe verificar cuenta
		Route::group(['middleware' => 'verified'], function () {

			# Prueba UNO
			Route::get('/prueba1', function () {
				return "Prueba 1";
			});

			Route::get('admin/prueba2', function () {
				return "Prueba DOS";
			});

			# Admin / Users
			Route::resource('admin/users', 'UserController');

			Route::get('admin/users/{id}/delete', [
				'as' => 'users.delete',
				'uses' => 'UserController@destroy',
			]);

			# SETTING
			Route::get('admin/settings', function () {
				return view('admin/settings');
			});

			Route::get('account', function () {
				return view('admin/account');
			});

			Route::get('account/password', 'AccountController@getPassword');
			Route::post('account/password', 'AccountController@postPassword');
			Route::get('account/edit-profile', 'AccountController@editProfile');
			Route::put('account/edit-profile', 'AccountController@updateProfile');

		});

	});

});
