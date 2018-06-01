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

use App\User;

Route::get('/', function () {
    return view('login');
});

/*Route::get('users', function() {
    User::create ([
        "name" => "David",
        "email" => "d.janusk@gmail.com",
        "password" => bcrypt("astronomy")
    ]);
    return User::all();
});*/

/*Route::get('/main', 'MainController@index');
Route::get('/register', 'MainController@register');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/main/home', 'MainController@home');
Route::get('main/logout', 'MainController@logout');
Route::resource('posts', 'PostsController');*/

Route::get('/', 'HomeController@logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');
//Route::resource('home', 'BookingController');