<?php
Route::group(['prefix'=>'api-admin', 'namespace'=> 'Admin'], function (){
    Route::get('/', function () {
        return view('layouts.app_master_admin');
    });
    /**
     * Route danh mục sản phẩm
     */
    Route::group(['prefix'=>'category'], function (){
        Route::get('', 'CategoryController@index')->name('admin.category.index');
        Route::get('/create', 'CategoryController@create')->name('admin.category.create');
        Route::post('/create', 'CategoryController@store');

        Route::get('/update/{id}', 'CategoryController@edit')->name('admin.category.update');
        Route::post('/update/{id}', 'CategoryController@update');

        Route::get('/active/{id}', 'CategoryController@active')->name('admin.category.active');
        Route::get('/hot/{id}', 'CategoryController@hot')->name('admin.category.hot');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
    });
});

