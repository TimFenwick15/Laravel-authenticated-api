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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/showusers', 'HomeController@show')->name('showusers');

Route::get('/livingroomdatapage', 'livingroomData@page')->name('livingroomdata');
Route::get('/livingroomdata', 'livingroomData@index');
