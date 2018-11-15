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
// Route::get('/donate', function () {
//     // return view('donate');
// });

 Route::get('/donate',[
    'uses' => 'DonateController@getIndex',
    'as' => 'donate.index'
 ]);
Route::get('/reach_us', function () {
    return view('reach_us');
});

Route::get('/events', function () {
    return view('events');
});



// Auth::routes();
Route::group(['prefix' => 'user'], function () {
    // Sign Up
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/signup',[
            'uses' => 'UserController@getSignup',
            'as'=> 'user.signup',
        ]);
        
        Route::post('/signup',[
            'uses' => 'UserController@postSignup',
            'as'=> 'user.signup',
        ]);
        // Sign In
        Route::get('/signin',[
            'uses' => 'UserController@getSignin',
            'as'=> 'user.signin',
        ]);
    
        Route::post('/signin',[
            'uses' => 'UserController@postSignin',
            'as'=> 'user.signin',
        ]);
    });
    Route::get('/profile',[
        'uses' => 'UserController@getProfile',
        'as'=> 'user.profile',
        'middleware' => 'auth'
    ]);

    // logout
    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout',
        'middleware' => 'auth'
    ]);
});
Route::get('/home', 'HomeController@index')->name('home');

