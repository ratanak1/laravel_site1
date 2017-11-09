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

Route::get('users', 'UsersController@index');

Route::get('users/create', 'UsersController@create');

Route::post('users', 'UsersController@store');

/*
Route::get('users', function(){
	$users = [
		'0' => [
		'first_name' => 'Renato',
		'last_name' => 'Hysa', 
		'location' => 'Albania'
		], 
		'1' => [
		'first_name' => 'Green', 
		'last_name' => 'Apple', 
		'location' => 'USA'
		]
	];
	return $users;
});

*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
