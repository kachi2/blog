<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news/details/{id}', 'HomeController@details')->name('post.details');
Route::get('/crypto/businesses', 'HomeController@business')->name('crypto.business');
Route::get('/crypto/brokers', 'HomeController@brokers')->name('crypto.brokers');



#===================ADMIN PAGES ================
Route::prefix('cyptoconsole')->group(function (){
Route::get('/', 'AdminController@index')->name('admin.index');
Route::get('/blog/create', 'AdminController@createBlog')->name('admin.blog.create');
Route::post('/blog/store', 'AdminController@storeBlog');
Route::get('/blog/index', 'AdminController@blogIndex')->name('admin.blog.index');


});
