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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('user','UserController@index');
Route::get('user/create','UserController@create');
Route::post('user/store','UserController@store');
Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/{id}/update', 'UserController@update');
Route::get('user/{id}/delete', 'UserController@destroy');



Route::get('customer','CustomerController@index');
Route::get('customer/create','CustomerController@create');
Route::post('customer/store','CustomerController@store');
Route::get('customer/{id_cus}/edit', 'CustomerController@edit');
Route::post('customer/{id_cus}/update', 'CustomerController@update');
Route::get('customer/{id_cus}/delete', 'CustomerController@destroy');
Route::get('customer/{id_cus}/show', 'CustomerController@show');


Route::get('pic','PicController@index');
Route::get('pic/create','PicController@create');
Route::post('pic/store','PicController@store');
Route::get('pic/{idpic}/edit', 'PicController@edit');
Route::post('pic/{idpic}/update', 'PicController@update');
Route::get('pic/{idpic}/delete', 'PicController@destroy');


Route::get('kas','KasController@index');
Route::get('kas/create','KasController@create');
Route::post('kas/store','KasController@store');
Route::get('kas/{idkas}/edit', 'KasController@edit');
Route::post('kas/{idkass}/update', 'KasController@update');
Route::get('kas/{idkas}/delete', 'KasController@destroy');

Route::get('ms','MsController@index');
Route::get('ms/create','MsController@create');
Route::post('ms/store','MsController@store');
Route::get('ms/{idms}/edit', 'MsController@edit');
Route::post('ms/{idms}/update', 'MsController@update');
Route::get('ms/{idms}/delete', 'MsController@destroy');

Route::get('tr','TrController@index');
Route::get('tr/create','TrController@create');
Route::post('tr/store','TrController@store');
Route::get('tr/{idtr}/edit', 'TrController@edit');
Route::post('tr/{idtr}/update', 'TrController@update');
Route::get('tr/{idtr}/delete', 'TrController@destroy');
