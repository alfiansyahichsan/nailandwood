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

/* admin */
Route::get('/admin/dashboard',array('as'=>'dashboard','uses'=>'admin@Dashboard'));

Route::resource('admin/acara','EventsController');
Route::get('/admin/acara',array('as'=>'acara','uses'=>'admin@Acara'));
Route::post ( '/admin/editItem', 'EventsController@editItem' );

Route::resource('admin/slider','SlidersController');
Route::get('/admin/slider',array('as'=>'slider','uses'=>'admin@Slider'));



Route::get('/socmed',array('as'=>'socmed','uses'=>'admin@Socmed'));
Route::get('/musicalbum',array('as'=>'musicalbum','uses'=>'admin@MusicAlbum'));
Route::get('/news',array('as'=>'news','uses'=>'admin@News'));
Route::get('/videos',array('as'=>'videos','uses'=>'admin@Videos'));
Route::get('/playlist',array('as'=>'playlist','uses'=>'admin@Playlist'));

Route::get('/',array('as'=>'home','uses'=>'ProductController@getIndex'));
Route::get('/add-to-cart/{id}',array('as'=>'product.addToCart','uses'=>'ProductController@getAddToCart'));






Route::get('/biography',array('as'=>'biography','uses'=>'page@Biography'));
Route::get('/gallery',array('as'=>'gallery','uses'=>'page@Gallery'));
Route::get('/gallerysingle',array('as'=>'gallerysingle','uses'=>'page@GallerySingle'));
Route::get('/music',array('as'=>'music','uses'=>'page@Music'));
Route::get('/events',array('as'=>'events','uses'=>'page@Events'));
Route::get('/shop',array('as'=>'shop','uses'=>'page@Shop'));
Route::get('/detailshop',array('as'=>'detailshop','uses'=>'page@DetailShop'));
Route::get('/blog',array('as'=>'blog','uses'=>'page@Blog'));
Route::get('/video',array('as'=>'video','uses'=>'page@Video'));
Route::get('/checkout',array('as'=>'checkout','uses'=>'page@Checkout'));
Route::get('/viewcart',array('as'=>'viewcart','uses'=>'page@ViewCart'));
Route::get('/blogsingle',array('as'=>'blogsingle','uses'=>'page@BlogSingle'));

Route::get('/admin',array('as'=>'login','uses'=>'page@Login'));

Auth::routes();

Route::get('/home', 'HomeController@index');

