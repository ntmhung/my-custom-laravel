<?php
/**
 * Created by IntelliJ IDEA.
 * User: minhhung
 * Date: 3/5/18
 * Time: 23:01
 */

//http
Route::get('/post', 'PostController@index');
Route::get('/post/add', 'PostController@add');

Route::get('/post/{slug}', 'PostController@show');
Route::post('/post/store', 'PostController@store');

//resource
//Route::resource('post', 'PostController');