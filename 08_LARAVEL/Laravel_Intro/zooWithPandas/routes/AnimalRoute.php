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

////  ex 5
//Route::get('Home/{day?}', 'HomeController@home');

Route::get('Animal', 'AnimalController@index');

Route::get('Animal', 'AnimalController@create');

Route::get('Animal', 'AnimalController@store');

Route::get('Animal', 'AnimalController@show');

Route::get('Animal', 'AnimalController@edit');

Route::get('Animal', 'AnimalController@update');

Route::get('Animal', 'AnimalController@destroy');