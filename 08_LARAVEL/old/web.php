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

// routes des  teams
Route::get('/teams/', 'TeamController@index')->name('teams');;
Route::get('/teams/show/{team}', 'TeamController@show');
// routes des admins teams
Route::get('admin/teams/', 'Admin\AdminTeamController@index')->name('admin_team_index');
Route::get('admin/teams/create', 'Admin\AdminTeamController@create')->name('admin_team_create');
Route::get('admin/teams/edit/{team}', 'Admin\AdminTeamController@edit')->name('admin_team_edit');
Route::get('admin/teams/delete/{team}', 'Admin\AdminTeamController@destroy')->name('admin_team_delete');
Route::post('admin/teams/store', 'Admin\AdminTeamController@store')->name('admin_team_store');


Route::get('/', function () {
    return view('welcome');
});
// routes d'autentification
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//routes des users
Route::get('/users/user/{id}', 'UserController@show')->name('user_index');
Route::get('/users/edit/{id}', 'UserController@edit')->name('user_edit');
Route::post('/users/update', 'UserController@update')->name('user_update');

//routes des admin users
Route::get('/admin/users/', 'Admin\AdminUserController@index')->name('admin_user_index');
Route::get('/admin/users/add', 'Admin\AdminUserController@create')->name('admin_user_add');
Route::post('/admin/users/store', 'Admin\AdminUserController@store')->name('admin_user_store');
Route::get('/admin/users/edit/{id}', 'Admin\AdminUserController@edit')->name('admin_user_edit');
Route::post('/admin/users/update', 'Admin\AdminUserController@update')->name('admin_user_update');
Route::get('/admin/users/delete/{id}', 'Admin\AdminUserController@destroy')->name('admin_user_delete');


// routes des players
Route::get('/players/show/{id}', 'PlayerController@show');

// routes des admins players
Route::get('/admin/players/', 'Admin\AdminPlayerController@index')->name('admin_player_index');
Route::get('/admin/players/add', 'Admin\AdminPlayerController@add')->name('admin_player_add');
Route::get('/admin/players/edit/{id}', 'Admin\AdminPlayerController@edit')->name('admin_player_edit');
Route::post('/admin/players/store', 'Admin\AdminPlayerController@store')->name('admin_player_store');
Route::get('/admin/players/delete/{id}', 'Admin\AdminPlayerController@delete')->name('admin_player_delete');

// routes des admins matches
Route::get('/admin/matches/', 'Admin\AdminMatchController@index')->name('admin_match_index');
Route::get('/admin/matches/add', 'Admin\AdminMatchController@add')->name('admin_match_add');
Route::get('/admin/matches/edit/{id}', 'Admin\AdminMatchController@edit')->name('admin_match_edit');
Route::post('/admin/matches/store', 'Admin\AdminMatchController@store')->name('admin_match_store');
Route::get('/admin/matches/delete/{id}', 'Admin\AdminMatchController@delete')->name('admin_match_delete');

// routes des admins stats
Route::get('/admin/stats/', 'Admin\AdminStatController@index')->name('admin_stat_index');
Route::get('/admin/stats/add', 'Admin\AdminStatController@add')->name('admin_stat_add');
Route::get('/admin/stats/edit/{id}', 'Admin\AdminStatController@edit')->name('admin_stat_edit');
Route::post('/admin/stats/store', 'Admin\AdminStatController@store')->name('admin_stat_store');
Route::get('/admin/stats/delete/{id}', 'Admin\AdminStatController@delete')->name('admin_stat_delete');




// routes pour les langues

Route::get('/lang/{lang?}', function($lang = null)
{
    App::setLocale($lang);
    return view('home');
})->name('lang');