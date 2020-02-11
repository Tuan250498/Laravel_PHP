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
    Route::get('/', 'AdminController@index')->name('admin.home');
    /**
     * Route loai san pham
     */
    Route::group(['prefix'=>'category'], function(){
        Route::get('/', 'AdminCategoryController@index')->name('Admin.list.Category');
        Route::get('/create', 'AdminCategoryController@create')->name('Admin.create.Category');
        Route::post('/create', 'AdminCategoryController@store')->name('Admin.store.Category');
        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('Admin.edit.Category');
        Route::post('/update/{id}', 'AdminCategoryController@update')->name('Admin.update.Category');
        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('Admin.action.Category');
    });

    /**
     * Route san pham
     */
    Route::group(['prefix'=>'product'], function(){
        Route::get('/', 'AdminProductController@index')->name('Admin.list.Product');
        Route::get('/create', 'AdminProductController@create')->name('Admin.create.Product');
        Route::post('/create', 'AdminProductController@store')->name('Admin.store.Product');
        Route::get('/update/{id}', 'AdminProductController@edit')->name('Admin.edit.Product');
        Route::post('/update/{id}', 'AdminProductController@update')->name('Admin.update.Product');
        Route::get('/{action}/{id}', 'AdminProductController@action')->name('Admin.action.Product');
    });
});
