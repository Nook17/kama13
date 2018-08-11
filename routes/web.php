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

Route::group(['middleware' => ['auth']], function () {
 Route::get('/admin-panel', 'AdminController@index')->name('admin');
 Route::resource('/admin/manufacture', 'ManufactureController', ['except' => ['show']]);
 Route::resource('/admin/picture', 'PictureController', ['except' => ['show']]);
 Route::resource('/admin/post', 'PostController', ['except' => ['show']]);
 Route::resource('/admin/category', 'CategoryController', ['except' => ['show']]);
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'AdminController@index')->name('admin');
Route::get('/', 'KamaController@index')->name('index');
Route::get('/gallery/{id_manufacture?}/{id_picture?}/{gallery?}', 'KamaController@gallery')->name('gallery');
Route::get('/blog', 'KamaController@blog')->name('blog');
Route::get('/post/{post}', 'KamaController@post')->name('post');
Route::post('/contact_send', 'KamaController@contact_send')->name('contact_send');
Route::post('/newsletter_send', 'KamaController@newsletter_send')->name('newsletter_send');
Route::get('/newsletter_delete/{code}', 'KamaController@newsletter_delete')->name('newsletter_delete');
Route::get('/newsletter_post', 'KamaController@newsletter_post')->name('newsletter_post');
Route::get('/about', 'KamaController@about')->name('about');
Route::get('/contact', 'KamaController@contact')->name('contact');
Route::get('/{category}', 'KamaController@index_category')->name('index_category');
