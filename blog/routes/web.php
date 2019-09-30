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

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('about','about')->name('about');

Route::get('/portfolio','PortofolioController@index')->name('portfolio.index');
Route::get('/portfolio/{id}','PortofolioController@show')->name('portfolio.show');

Route::view('contact','contact')->name('contact');
Route::post('contact','MessageController@store');





