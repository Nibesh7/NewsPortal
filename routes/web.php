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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| categories Routes
|--------------------------------------------------------------------------

*/
Route::resource('admin/categories', 'Admin\CategoriesController');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------

*/

Route::resource('admin/posts', 'Admin\PostsController');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------

*/

Route::resource('admin/tags', 'Admin\TagsController');


