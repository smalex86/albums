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

Route::get('/', 'AlbumController@index');

Route::get('test', function() {
    echo asset('storage/file.txt');
    // echo HTML::link('/public', 'Insert New Record');
});


Route::get('albums', 'AlbumController@index');
Route::get('album/{id}', 'AlbumController@show');
Route::get('album_covers/{id}', 'AlbumController@cover_image');

Route::get('test2', 'AlbumController@test2');

