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

    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', 'HomeController@index');
        Route::get('/item/{id}','Product\ProductController@show');
        Route::get('/product/add','Product\ProductController@add');
        Route::post('/product/insert','Product\ProductController@insert');
        Route::get('/categories', 'Category\CategoryController@index');
        Route::get('category/{id}','Category\CategoryController@single');
        Route::get('/me/items','User\UserController@myItems');
        Route::get('/item/{id}/returned', 'User\UserController@returned');
    });

