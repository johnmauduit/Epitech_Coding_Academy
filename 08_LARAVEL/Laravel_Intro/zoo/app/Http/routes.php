<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

////  ex 1
// Route::get('Home', function () {
//     return view('Home');
// });

////  ex 4
//Route::get('Home', 'HomeController@home');

////  ex 5
Route::get('Home/{day?}', 'HomeController@home');

