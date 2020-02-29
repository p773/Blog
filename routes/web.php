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

Route::get('/categories', function () {
   return view('categories');
});

//Route::get('/{slug}', function ($slug) {
    //return 'stronie'.$slug;
//} );

Route::get('/create', 'PagesController@create');

Route::post('/create', 'PagesController@store');

Route::post('/show', 'PagesController@show');

//Route::post('/create', 'PagesController@cat');

Route::get('/create', 'PagesController@cat');

Route::get('/categories', 'CategoriesController@');

//Route::get('/showcat', 'PagesController@');


Route::get('/show', function () {
    return view('show');
});


Route::resource('show', 'PagesController');

Route::resource('showcat/', 'PagesController');

Route::resource('categories', 'CategoriesController');

//Route::resource('categories', 'PagesController');

//Route::post('/categories', 'CategoriesController');



//Route::post('/showcat', 'PagesController@showcat');
Route::get('showcat/{category}', 'PagesController@showcat');
//Route::get('switchinfo/{prisw}/{secsw}', 'SwitchinfoController@functionname');

//Route::get('/wizytaszczegoly/{id}', 'VisitController@visitDetails')->name('visit.visitDetails')

Route::get('showcat/{category?}', function ($category) {
    return 'category '.$category;
    
});