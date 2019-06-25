<?php
use App\Http\Controllers\FrontController;

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
//     return view('frontend.index');
// });

Route::get('/', 'FrontController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

/*
|--------------------------------------------------------------------------
| categories Routes
|--------------------------------------------------------------------------
*/
// Route::get('admin/categories/get_ajax', 'Admin\CategoriesController@get_ajax');
Route::resource('admin/categories', 'Admin\CategoriesController')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------

*/

Route::resource('admin/posts', 'Admin\PostsController')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------

*/

Route::resource('admin/tags', 'Admin\TagsController')->middleware('auth');

/*
|--------------------------------------------------------------------------
|       FrontEnd Routes
|--------------------------------------------------------------------------

*/

Route::resource('/front','FrontController');    