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



Route::get('/', 'HomePageController@shownew');

Route::get('/typelist-{id}', 'ProductsController@show');
Route::get('/product-{id}', 'ProductsController@chitiet');

Route::get('/Search', 'SearchController@Name');
Route::get('/SearchByMultipleCriteria', 'SearchController@MultipleCriteria');

//Route::resource('/san-pham', 'SanPhamController');
//Route::resource('/Admin', 'AdminController',
//['parameters' => ['Admin' => 'id']]);


Route::get('/cart', function () {
    return view('cart');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
Route::resource('/Admin', 'AdminController',
['parameters' => ['Admin' => 'id']]);
});
