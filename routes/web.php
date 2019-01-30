<?php

Route::get('/', 'InvoicesController@index');
Route::get('/playlists', 'PlaylistController@index');
Route::get('/playlists/new', 'PlaylistController@create');
Route::get('/playlists/{id}', 'PlaylistController@index');
Route::post('/playlists', 'PlaylistController@store');
