<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('threads/profile/{user}', 'UserController@edit')->name('user.edit');
Route::put('threads/profile/{user}/update', 'UserController@update')->name('user.update');

// Route::get('threads', 'ThreadsController@index')->name('threads.index');
Route::get('threads/create', 'ThreadsController@create')->name('threads.create');
Route::post('threads', 'ThreadsController@store')->name('threads.store');
Route::get('threads/{category?}', 'ThreadsController@index')->name('threads.index');
Route::get('threads/{category}/{thread}', 'ThreadsController@show')->name('threads.show');
Route::post('threads/{thread}/destroy', 'ThreadsController@destroy')->name('threads.destroy');

Route::post('threads/{category}/{thread}/reply', 'RepliesController@store')->name('replies.store');
Route::patch('threads/reply/{reply}', 'RepliesController@update')->name('replies.update');
Route::delete('threads/reply/{reply}/delete', 'RepliesController@destroy')->name('replies.destroy');

Route::post('threads/reply/{reply}/favorite', 'FavoritesController@store');
Route::delete('threads/reply/{reply}/favorite', 'FavoritesController@destroy');



