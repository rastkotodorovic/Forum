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

Auth::routes();

Route::get('/threads', 'ThreadsController@index')->name('threads.index');
Route::get('/threads/create', 'ThreadsController@create')->name('threads.create');
Route::post('/threads/create', 'ThreadsController@store')->name('threads.store');
Route::get('/threads/{category}', 'ThreadsController@index');
Route::get('/threads/{category}/{thread}', 'ThreadsController@show')->name('threads.show');
Route::post('/threads/{thread}/destroy', 'ThreadsController@destroy')->name('threads.destroy');

Route::post('/threads/{category}/{thread}/reply', 'RepliesController@store')->name('replies.store');
Route::delete('/threads/reply/{reply}', 'RepliesController@destroy')->name('replies.destroy');
