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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/admin', 'PagesController@admin');

Route::resource('index/cpu', 'PostsController');
Route::resource('index/mobo', 'MoboController');
Route::resource('index/cooler', 'CoolerController');