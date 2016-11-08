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
Route::get('/', function()
{
	return View::make('home');
});

Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});

Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

Route::get('/cars', 'CarController@index');
Route::get('/cars/delete/{id}','CarController@destroy');
Route::get('/cars/edit/{id}','CarController@edit');
Route::get('/cars/update', 'CarController@update');
Route::get('/cars/create', 'CarController@create');
Route::get('/cars/store', 'CarController@store');

Route::get('/options', 'OptionController@index');
Route::get('/options/delete/{id}','OptionController@destroy');
Route::get('/options/edit/{id}','OptionController@edit');
Route::get('/options/update', 'OptionController@update');
Route::get('/options/create', 'OptionController@create');
Route::get('/options/store', 'OptionController@store');

Route::get('/promos', 'PromoController@index');
Route::get('/promos/delete/{id}','PromoController@destroy');
Route::get('/promos/edit/{id}','PromoController@edit');
Route::get('/promos/update', 'PromoController@update');
Route::get('/promos/create', 'PromoController@create');
Route::get('/promos/store', 'PromoController@store');

Route::get('/ranges', 'RangeController@index');
Route::get('/ranges/delete/{id}','RangeController@destroy');
Route::get('/ranges/edit/{id}','RangeController@edit');
Route::get('/ranges/update', 'RangeController@update');
Route::get('/ranges/create', 'RangeController@create');
Route::get('/ranges/store', 'PromoController@store');
Route::get('/ranges/show/{id}', 'PromoController@show');

Route::get('/test', function()
{
	return View::make('promo/test');
});