<?php

use Illuminate\Support\Facades\Route;
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
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index');


Route::prefix('products')->group(function () {
    Route::get('/', 'ItemController@index');
    Route::get('/create', 'ItemController@create');
    Route::get('/{id}', 'ItemController@show')->name('product_show');
    Route::post('/save', 'ItemController@store');
    Route::get('/edit/{id}', 'ItemController@edit');
    Route::post('/update{id}', 'ItemController@update');
    Route::get('/delete/{id}', 'ItemController@destroy');
});

Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/store', 'CategoryController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
