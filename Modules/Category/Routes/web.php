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

Route::prefix('admin/category')->name('mainCategory.')->group(function() {
    Route::get('/', 'MainCategoryController@index')->name('index');
    Route::get('/create', 'MainCategoryController@create')->name('create');
    Route::get('/{id}/edit', 'MainCategoryController@edit')->name('edit');
    Route::get('/show/{id}', 'MainCategoryController@show')->name('show');
    Route::post('/store', 'MainCategoryController@handle')->name('store');
    Route::post('/update/{id}', 'MainCategoryController@update')->name('update');
    Route::delete('/delete/{id}', 'MainCategoryController@destroy')->name('delete');

    Route::get('/test', 'MainCategoryController@getStandardLength');
});
