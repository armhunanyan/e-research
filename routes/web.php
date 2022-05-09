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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/portfolio', 'PagesController@portfolio')->name('portfolio');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/materials', 'PagesController@materials')->name('materials');
Route::get('/contact', 'PagesController@contact')->name('contact');
