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
    return view('about_us');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/reach_us', function () {
    return view('reach_us');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
