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

Route::get(			'/home',                   'HomeController@index');
Route::get(			'/', 				               'HomeController@index');
Route::get(			'/dashboard',		           'DashboardController@index');
Route::get(			'/dashboard/delete/{id}',		           'DashboardController@delete');
Route::get(			'/dashboard/restore/{id}',		           'DashboardController@restore');
Route::get(			'/contest/{id}',	         'ContestController@index');
Route::get(			'/contest-participate/{id}',	   'ContestController@participate');
Route::post(			'/contestant/{id}',	   'ContestantController@index');
