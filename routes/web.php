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

// Route::get('/', function () {
//  return view('index');
// });

Auth::routes();
// Route::match(['get', 'post'], 'register', function () {
//  return redirect('/');
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'KamaController@index')->name('index');
Route::get('/blog', 'KamaController@blog')->name('blog');
Route::get('/post/{post}', 'KamaController@post')->name('post');
Route::get('/about', 'KamaController@about')->name('about');
Route::get('/contact', 'KamaController@contact')->name('contact');

Route::group(['middleware' => ['auth']], function () {
 Route::get('/admin-panel', 'AdminController@index')->name('admin');
 Route::resource('/admin/post', 'PostController');
 Route::resource('/admin/category', 'CategoryController');
});
