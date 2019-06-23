<?php
use App\Http\Controllers\UserController;

Route::get('/', 'UserController@index')->name('users.index');

Route::get('users/create', 'UserController@create')->name('users.create');

Route::post('users/create', 'UserController@store')->name('users.store');

Route::get('users/{id}/edit/', 'UserController@edit')->name('users.edit');
Route::post('users/{id}/edit/', 'UserController@update')->name('users.update');
Route::post('users/{id}', 'UserController@destroy')->name('users.destroy');


