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



Route::get('/hello', function () {
    return  'hello world';
});

Route::get('/about', function () {
    return  view('pages.about');
});


Route::get('/', 'pagesController@index');
Route::get('/about', 'pagesController@about');
Route::get('/services', 'pagesController@services');

route::resource('post','Postcontroller');



/*

Route::get('/users/{id}', function ($id) {
    return  'this is user '. $id;
});

Route::get('/', function () {
    return view('welcome');
});

*/