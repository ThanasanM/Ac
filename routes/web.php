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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/index', 'Admin\AdminController@index')->name('index');


Route::get('/home', 'HomeController@index')->name('home');
//background
Route::get('/background', 'Admin\BackgroundController@index')->name('background');
//about
Route::get('/about', 'Admin\AboutController@index')->name('about');
//product
Route::get('/product', 'Admin\ProductController@index')->name('product');
//know
Route::get('/know', 'Admin\KnowController@index')->name('know');
//recommend_product
Route::get('/recommend_product', 'Admin\Recommend_productController@index')->name('recommend_product');
//contact
Route::get('/contact', 'Admin\ContactController@index')->name('contact');
//user
Route::get('/user', 'Admin\UserController@index')->name('user');

