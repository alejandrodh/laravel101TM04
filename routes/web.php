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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product-add', 'ProductController@create');
Route::post('/product-add', 'ProductController@store');
Route::get('/products', 'ProductController@index');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/edit/{id}', 'ProductController@update');
Route::get('/product/{id}', 'ProductController@show');
Route::post('/product/{id}', 'ProductController@destroy');
Route::get('/product/addtocart/{id}', 'CartController@store');

Route::get('/cart', 'CartController@show');
