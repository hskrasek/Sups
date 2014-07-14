<?php


Route::get('users', 'UsersController@index');
Route::get('users/{id}', 'UsersController@show');
Route::post('users', 'UsersController@store');
Route::put('users/{id}', 'UsersController@update');
Route::delete('users/{id}', 'UsersController@destroy');
Route::get('users/{id}/friends', 'UsersController@friends');
Route::get('users/{id}/devices', 'UsersController@devices');

