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


Auth::routes();

Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts/{post}/comments', 'CommentController@store')->middleware('auth');

Route::group(['prefix' => '/user', 'namespace' => 'User'], function () {
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
    Route::get('notifications', 'NotificationController@index');
    Route::get('edit/avatar', 'AvatarController@edit');
    Route::put('edit/avatar', 'AvatarController@update');
});

