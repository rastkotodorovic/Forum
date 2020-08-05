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

Route::get('create', function () {
    return view('create');
});

Auth::routes();

Route::get('/threads', 'ThreadsController@index')->name('threads.index');
Route::get('/threads/create', 'ThreadsController@create')->name('threads.create');
Route::post('/threads/create', 'ThreadsController@store')->name('threads.store');
Route::get('/threads/{thread}', 'ThreadsController@show')->name('threads.show');

Route::post('/threads/{thread}/reply', 'RepliesController@store')->name('replies.store');
