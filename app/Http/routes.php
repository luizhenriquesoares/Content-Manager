<?php

/**
 * @router
 * Cria rota principal para home do painel
 */
Route::group(['namespace' => 'Admin'], function() {
   Route::get('/admin', 'HomeController@index');
});

Route::group(['namespace' => 'Admin' , 'prefix' => 'admin'], function ()
{
    /**
     * @resource
     * Cria a rota a para o create / update / delete / store / index / show /  edit
     */

    Route::resource('/categories', 'CategoriesController');
    Route::resource('/contents',   'ContentsController');
    Route::resource('/users',      'UsersController');

});





