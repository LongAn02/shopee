<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Category\Http\Controllers\CategoryController;
use App\Domains\Category\Http\Controllers\SubCategoryController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin', function () {
    return view('backend.pages.index');
});

Route::controller(CategoryController::class)->name('category.')->prefix('admin/category')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('update/{$id}', 'update')->name('update');
});

Route::controller(SubCategoryController::class)->name('subCategory.')->prefix('admin/sub-category')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('update/{$id}', 'update')->name('update');
});
