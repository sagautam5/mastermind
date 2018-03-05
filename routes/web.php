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
Route::get('/admin','AdminController@index');
Route::get('/guest','GuestController@index');

Route::group(['middleware' => 'AdminRoutes', 'prefix' => 'admin'], function()
{
	Route::get('/home','AdminController@dashboard');
});

Route::group(['middleware' => 'GuestRoutes', 'prefix' => 'guest'], function()
{
	Route::get('/home','GuestController@dashboard');
});