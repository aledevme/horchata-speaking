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


Route::get('/portfolio','ProjectController@index')->name('portfolio.index');
Route::get('/portfolio/create','ProjectController@create')->name('project.create');
Route::get('/portfolio/{project}/edit','ProjectController@edit')->name('project.edit');
Route::post('/portfolio','ProjectController@store')->name('projects.store');
Route::patch('/portfolio/{project}','ProjectController@update')->name('projects.update');
Route::get('/portfolio/{project}','ProjectController@show')->name('project.show');


Route::view('contact','contact')->name('contact');
Route::post('contact','MessageController@store');





