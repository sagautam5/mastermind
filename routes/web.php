<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function ()
{
    return redirect()->to('/login');
});
// Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/about','DashboardController@getAbout');
Route::get('/rules','DashboardController@getRules');

Route::group(['middleware' => 'adminRoutes', 'prefix' => 'admin'], function()
{
	Route::get('/dashboard','AdminController@dashboard');

});

Route::group(['middleware' => 'adminRoutes'], function(){

	Route::get('/stats','AdminController@getStats');
	Route::get('/users','AdminController@getUsers');
	
});

Route::group(['middleware' => 'guestRoutes', 'prefix' => 'guest'], function()
{
	Route::get('/dashboard','GuestController@dashboard');
});