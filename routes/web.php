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


Route::get('/templates', 'ProductController@getTemplates');
Route::get('/templates/{id}', 'ProductController@getTemplate');


Route::get('/home', 'ProductController@getHome')->name('home');

Route::get('/', 'ProductController@getIndex')->name('product.index');

Route::get('/add-to-cart/{id}', 'ProductController@addToCart')->name('product.addToCart');

Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('product.reduceByOne');

Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.remove');


Route::get('/search', 'SearchController@search');