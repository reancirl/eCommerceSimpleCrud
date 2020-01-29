<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index']);
//////////////////////////////////////////////////////////////////////////////////
///////////////////////////////PRODUCTS///////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
Route::get('products', 'ProductController@index')->name('dashboard');
Route::get('products/create', 'ProductController@create');
Route::post('products', 'ProductController@store');
Route::get('products/show/{id}', 'ProductController@show');
Route::get('products/edit/{id}', 'ProductController@edit');
Route::patch('products/{id}','ProductController@update');
Route::delete('products/{product}', 'ProductController@destroy');
//////////////////////////////////////////////////////////////////////////////////
///////////////////////////////CATEGORIES/////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
Route::get('categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('categories', 'CategoryController@store');
Route::delete('categories/{category}', 'CategoryController@destroy');