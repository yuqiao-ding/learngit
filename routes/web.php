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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('db')->group(function () {
    Route::get('insert', 'DbController@insert');
    Route::get('/', 'DbController@index');
    Route::get('/delete', 'DbController@delete');
    Route::get('/add', 'DbController@add');
    Route::get('/update', 'DbController@update');
});

Route::prefix('delete')->group(function () {
    Route::get('insert', 'DeleteController@insert');
});

Route::get('/test', 'TestController@index');