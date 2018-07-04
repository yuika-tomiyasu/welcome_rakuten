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

Route::get('index', 'ContentsController@index')->name('contents.index');
Route::get('branch', 'ContentsController@branch')->name('contents.branch');
Route::get('gallery', 'ContentsController@gallery')->name('contents.gallery');