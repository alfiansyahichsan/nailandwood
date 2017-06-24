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

Route::post('send','MailController@send');
Route::get('biography','MailController@email');

/* admin */
Route::get('/admin/dashboard',array('as'=>'dashboard','uses'=>'admin@Dashboard'));

Route::resource('admin/slider','SlidersController');
Route::get('/admin/slider',array('as'=>'slider','uses'=>'SlidersController@index'));
Route::post ( '/admin/slider/editItem', 'SlidersController@editItem' );
Route::post ( '/admin/slider/deleteItem', 'SlidersController@deleteItem' );

Route::resource('admin/lmusic','LMusicController');
Route::get('/admin/lmusic',array('as'=>'lmusic','uses'=>'LMusicController@index'));
Route::post ( '/admin/lmusic/editItem', 'LMusicController@editItem' );
Route::post ( '/admin/lmusic/deleteItem', 'LMusicController@deleteItem' );

Route::resource('admin/acara','EventsController');
Route::get('/admin/acara',array('as'=>'acara','uses'=>'EventsController@index'));
Route::post ( '/admin/event/editItem', 'EventsController@editItem' );
Route::post ( '/admin/event/deleteItem', 'EventsController@deleteItem' );

Route::resource('admin/lvideo','LVideoController');
Route::get('/admin/lvideo',array('as'=>'lvideo','uses'=>'LVideoController@index'));
Route::post ( '/admin/lvideo/editItem', 'LVideoController@editItem' );
Route::post ( '/admin/lvideo/deleteItem', 'LVideoController@deleteItem' );

Route::resource('admin/quotation','QuotationController');
Route::get('/admin/quotation',array('as'=>'quotation','uses'=>'QuotationController@index'));
Route::post ( '/admin/quotation/editItem', 'QuotationController@editItem' );
Route::post ( '/admin/quotation/deleteItem', 'QuotationController@deleteItem' );

Route::get('/socmed',array('as'=>'socmed','uses'=>'admin@Socmed'));
Route::get('/musicalbum',array('as'=>'musicalbum','uses'=>'admin@MusicAlbum'));
Route::get('/news',array('as'=>'news','uses'=>'admin@News'));
Route::get('/videos',array('as'=>'videos','uses'=>'admin@Videos'));
Route::get('/playlist',array('as'=>'playlist','uses'=>'admin@Playlist'));

Route::get('/',array('as'=>'home','uses'=>'page@Home'));


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

