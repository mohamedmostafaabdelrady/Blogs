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

Route::group(['middleware'=>'auth'],function(){

           Route::get('/admin', function () {
           return view('dashboard.index');
            });
           



});  

Auth::routes();
  Route::resource('/categories', 'CategoriesController');
  Route::resource('/posts', 'PostsController');
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/', 'PostsController@index2');
  Route::get('/category/{id}/posts','CategoriesController@user_show');
