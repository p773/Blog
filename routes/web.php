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

Route::get('/about', function () {
    return view('about');
});

//Route::get('/{slug}', function ($slug) {
    //return 'stronie'.$slug;
//} );

Route::get('/create', 'PagesController@create');

Route::post('/create', 'PagesController@store');

Route::post('/show', 'PagesController@show');

Route::get('/show', function () {
    return view('show');
});


Route::resource('show', 'PagesController');