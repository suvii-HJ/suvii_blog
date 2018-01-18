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
    return view('login');
});
Route::get('/new', function () {
    return view('newBlog');
});

Route::match(['get','post'],'login','LoginController@login')->name('login');
Route::match(['get','post'],'index','IndexController@blogIndex')->name('index');
Route::match(['get','post'],'add','BlogController@addBlog')->name('add');
Route::match(['get','post'],'management','BlogController@management')->name('management');