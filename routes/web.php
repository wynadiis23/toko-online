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
Route::get('/hello', function() {
    return "Hello World";
});
Route::get('/product', 'ProductController@index');
Route::get('/show','ProductController@showAll');

Route::group(["prefix"=>"/category"], function(){
    Route::get("/", "CategoryController@index");

    Route::get("/create", "CategoryController@create");
    Route::post("/", "CategoryController@store");
    
    Route::get("/{id}", "CategoryController@show");

    Route::get("/{id}/edit", "CategoryController@edit");
    Route::put("/{id}", "CategoryController@update");

    Route::delete("/{id}", "CategoryController@destroy");
});
