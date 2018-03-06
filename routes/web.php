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
Auth::routes();

Route::group(['middleware' => 'adminRoutes', 'prefix' => 'admin'], function()
{
	Route::get('/dashboard','AdminController@dashboard');
});

Route::group(['middleware' => 'guestRoutes', 'prefix' => 'guest'], function()
{
	Route::get('/dashboard','GuestController@dashboard');
});