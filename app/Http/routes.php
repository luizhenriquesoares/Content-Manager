<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/admin',['uses' => 'ContentsController@index']);
Route::get('/contents/create',['uses' => 'ContentsController@create']);
Route::get('/contents/index', ['uses' => 'ContentsController@index']);
Route::get('/categories/create', ['uses' => 'CategoriesController@create']);
Route::post('/categories/store', ['uses' => 'CategoriesController@store']);

