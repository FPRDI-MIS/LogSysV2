<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LogSystemController@index');
Route::resource('logs', 'LogSystemController');
Route::resource('class', 'ClassesController');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/administrator', 'ReportsController@index')->middleware('auth');
Route::post('/administrator', 'ReportsController@sortByMonth')->middleware('auth');
Route::get('/administrator/settings', 'ReportsController@settings')->middleware('auth')->name('settings');
