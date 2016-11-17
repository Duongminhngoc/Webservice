<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home','HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::group(['middleware' => ['auth']], function() {
Route::get('/admin', 'HomeController@admin');
Route::group(['prefix' => 'services'], function()
{
    Route::resource('shipper', 'Services\ShipperController');
    Route::resource('product', 'Services\ProductController');
    Route::resource('orderItem', 'Services\OrderItemController');
    Route::resource('restaurant', 'Services\RestaurantController');
    Route::resource('shipment', 'Services\ShipmentController');
    Route::resource('county', 'Services\CountyController');
    Route::resource('user', 'Services\UserController');
});

Route::group(['prefix' => 'admin'], function()
{
    Route::resource('product', 'Admin\ProductController');
    Route::resource('user', 'Admin\UserController');
    Route::resource('order', 'Admin\OrderController');
    Route::resource('orderItem', 'Admin\OrderItemController');
    Route::resource('shipper', 'Admin\ShipperController');
    Route::resource('shipment', 'Admin\ShipmentController');
    Route::resource('restaurant', 'Admin\RestaurantController');
    Route::resource('orderStatus', 'Admin\OrderItemStatusCodeController');
});
});

