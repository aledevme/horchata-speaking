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
Route::view('nosotros','about')->name('about');

Route::resource('portfolio', 'ProjectController')
->names('projects')
->parameters(['portfolio'=>'project'])  ;
/*Route::get('/portfolio','ProjectController@index')->name('project.index');
Route::get('/portfolio/create','ProjectController@create')->name('project.create');
Route::get('/portfolio/{project}/edit','ProjectController@edit')->name('project.edit');
Route::post('/portfolio','ProjectController@store')->name('project.store');
Route::patch('/portfolio/{project}','ProjectController@update')->name('project.update');
Route::delete('/portfolio/{project}','ProjectController@delete')->name('project.delete');
Route::get('/portfolio/{project}','ProjectController@show')->name('project.show');
*/
Route::view('contact','contact')->name('contact');
Route::post('contact','MessageController@store');
Auth::routes(['register'=>false]);


