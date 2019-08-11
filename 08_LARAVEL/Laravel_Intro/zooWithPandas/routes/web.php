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

// Route::get('Animal', function () {
//     return view('Animal');
// });

// Route::get('Add', function () {
//     return view('Add');
// });
Route::get('Animals', 'AnimalController@index');

Route::get('Add', 'AnimalController@create');

Route::post('store', 'AnimalController@store');

Route::get('Animal/{id?}', 'AnimalController@show');

//Route::get('Home/{day?}', 'HomeController@home');
// Route::get('Animal', 'AnimalController@edit');

// Route::get('Animal', 'AnimalController@update');

// Route::get('Animal', 'AnimalController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
