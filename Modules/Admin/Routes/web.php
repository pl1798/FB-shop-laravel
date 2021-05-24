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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
    Route::group(['prefix' => 'category'], function(){
        Route::get('/{tab?}','AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
    });
    Route::group(['prefix' => 'product'], function(){
        Route::get('/{tab?}','AdminCategoryController@index')->name('admin.get.list.product');
    });
    Route::group(['prefix' => 'inform'], function(){
        Route::get('/{tab?}','AdminCategoryController@index')->name('admin.get.list.inform');
    });
    Route::group(['prefix' => 'order'], function(){
        Route::get('/{tab?}','AdminCategoryController@index')->name('admin.get.list.order');
    });
    Route::group(['prefix' => 'member'], function(){
        Route::get('/{tab?}','AdminCategoryController@index')->name('admin.get.list.member');
    });
});

