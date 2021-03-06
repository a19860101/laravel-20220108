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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','PageController@index')->name('index');

Route::get('admin',function(){
    return view('admin.index');
})->name('admin.index');

Route::resource('admin/product','ProductController')->middleware('auth');
Route::resource('admin/category','CategoryController')->middleware('auth');

Route::get('products','ProductController@list')->name('products.index');
Route::get('/products/{slug}','ProductController@listWithCategory')->name('products.listWithCategory');
Route::get('/product/{id}','ProductController@detail')->name('products.detail');
