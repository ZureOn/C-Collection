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

Route::get('/error', function () {
    return view('error');
})
	->name('error');

Route::get('/chatapp', function () {
    return view('chatapp');
})
	->middleware('auth') 
	->name('chatapp');

Route::get('/messages', function () {
    return App\Message::all();
})
	->middleware('auth') 
	->name('chatapp');

Auth::routes();

Route::get('/home', 'HomeController@index')
	->name('home');
