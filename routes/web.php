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

// Route::resource('index/cpu', 'PostsController');
// Route::resource('index/mobo', 'MoboController');

Route::resource('index/cpu', 'PostsController', ['names' => [
    'index' => 'cpu.index'
]]);

Route::resource('index/mobo', 'MoboController', ['names' => [
    'index' => 'mobo.index'
]]);


Route::resource('index/cooler', 'CoolerController');

Route::post('/index/mobo/{id}/add', 'MoboController@add')->name('moboAdd');

// Add more to the URL as you add more components, right now only Mother board, and CPU
// Route::get('/{mobo}/{cpu}/{optical/{ram}}', 'PagesController@homeWithData')->name('modifiedHome');

Route::get('/{mobo}/{cpu}', 'PagesController@homeWithData')->name('modifiedHome');
