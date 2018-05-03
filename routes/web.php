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
Auth::routes();
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
    return view('error');
}) ->name('error');

Route::get('/chatapp', function () {
    return view('chatapp');
}) ->middleware('auth') ->name('chatapp');

//need to work on this funct()--->
Route::get('/messages', function () {

    return App\Message::with('user')->get();

}) ->middleware('auth') ->name('messages');

	//route to return the username logged in
Route::get('/currentuser', function () {

	$user = auth::user();
    return $user['name'];

});

Route::get('/home', 'HomeController@index') ->name('home');
