<?php

Route::group(['namespace' => 'Admin', 'middleware'=>['auth', 'admin']], function(){
	Route::get('admin/home', 'HomeController@index')->name('admin.home');
	Route::resource('admin/products', 'ProductController');

	Route::resource('admin/orders', 'OrdersController');

Route::post('admin/products/create', 'ProductController@store');


});




Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');


Route::get('/home', 'ProductController@getHome')->name('home');

Route::get('/', 'ProductController@getIndex')->name('product.index');

Route::get('/add-to-cart/{id}', 'ProductController@addToCart')->name('product.addToCart');

Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('product.reduceByOne');

Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.remove');
//Route::resoure('address', 'AddressController');
Route::get('/search', 'SearchController@search');

Route::get('/search/{id}', 'SearchController@see');