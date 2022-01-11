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
Route::get('/crypto/invest', 'HomeController@Invest')->name('crypto.invest');
Route::get('/crypto/exchange', 'HomeController@Exchange')->name('crypto.exchange');
Route::get('/contact', 'HomeController@Contact')->name('contact.us');
Route::get('/about', 'HomeController@About')->name('about.us');
Route::get('/advertise', 'HomeController@Advertise')->name('advertise');



#===================ADMIN PAGES ================
Route::prefix('console')->group(function (){
Route::get('/', 'AdminController@index')->name('admin.index');
Route::get('/blog/create', 'AdminController@createBlog')->name('admin.blog.create');
Route::get('/slider/create', 'AdminController@createSlider')->name('admin.slider.create');
Route::post('/blog/store', 'AdminController@storeBlog');
Route::post('/slider/store', 'AdminController@storeSlider');
Route::get('/blog/index', 'AdminController@blogIndex')->name('admin.blog.index');
});
