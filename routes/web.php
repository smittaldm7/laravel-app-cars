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

Route::get('/', function () {
    return view('welcome');
});

Route::get('goo', function () {
    return "goo. This text is being returned from the routes/web.php file itself";
});

Route::get('foo', function () {
    return view('foo');
});

Route::resource('cars', 'CarController');
//creates a bunch of routes to the car controller

//Route::get('/site/index', 'SiteController@index');

//Route::get('cars', 'CarController@index')
//Route::get('cars/create', 'CarController@create')
