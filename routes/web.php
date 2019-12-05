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
Route::get('covers/{id}', 'AlbumController@cover');

Route::get('thumbs/{album_id}/{guid}', 'PhotoController@thumbImage');
Route::get('shows/{album_id}/{guid}', 'PhotoController@showImage');
Route::get('originals/{album_id}/{guid}', 'PhotoController@originalImage');

Route::get('test2', 'AlbumController@test2');

