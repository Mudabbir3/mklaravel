<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
  return "this is about page";
});


//Route::get('/person', 'Person@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware'=>'admin'],function(){
    Route::resource('limitless', 'Limitless');
    Route::resource('movies','MoviesController');
});

