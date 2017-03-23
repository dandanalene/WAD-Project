<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/toOrder', function() {
	return view('order-form');
});

Route::get('/yourOrder', function () {
    return view('your-orders');
});



Route::post('/order', "orderController@showOrder");
Route::get('/order', "orderController@showOrder");

Route::get('/orders', "orderController@show");
Route::post('/add-order', "orderController@addOrder");
Route::post('/your-order', "orderController@showList");
Route::post('/update/{id}' , "orderController@showUpdate");
Route::post('/edit/{id}' , "orderController@edit");
Route::post('/delete/{id}' , "orderController@deleteOrder");
Route::get('/your-order', "orderController@showList" );
Route::get('/yourOrder' , 'orderController@showList');


