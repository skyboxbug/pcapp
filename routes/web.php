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
Route::resource('index/ram', 'RamController');
Route::resource('index/gpu', 'GpuController');
Route::resource('index/case', 'CaseController');
Route::resource('index/psu', 'PsuController');
Route::resource('index/storage', 'StorageController');
Route::resource('index/opticaldrive', 'OpticalDriveController');

Route::post('/index/mobo/{id}/add', 'MoboController@add')->name('moboAdd');
Route::post('/index/cpu/{id}/add', 'PostsController@add')->name('cpuAdd');
Route::post('/index/case/{id}/add', 'CaseController@add')->name('caseAdd');
Route::post('/index/cooler/{id}/add', 'CoolerController@add')->name('coolerAdd');
Route::post('/index/gpu/{id}/add', 'GpuController@add')->name('gpuAdd');
Route::post('/index/storage/{id}/add', 'StorageController@add')->name('storageAdd');
Route::post('/index/opticaldrive/{id}/add', 'OpticalDriveController@add')->name('opticaldriveAdd');
Route::post('/index/psu/{id}/add', 'PsuController@add')->name('psuAdd');
Route::post('/index/ram/{id}/add', 'RamController@add')->name('ramAdd');
