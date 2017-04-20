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
Route::get('/dashboards',array('as'=>'dashboards','uses'=>'admin@Dashboards'));
Route::get('/slider',array('as'=>'slider','uses'=>'admin@Slider'));
Route::get('/socmed',array('as'=>'socmed','uses'=>'admin@Socmed'));

Route::get('/',array('as'=>'home','uses'=>'page@Home'));
Route::get('/biography',array('as'=>'biography','uses'=>'page@Biography'));
Route::get('/gallery',array('as'=>'gallery','uses'=>'page@Gallery'));
Route::get('/music',array('as'=>'music','uses'=>'page@Music'));
Route::get('/events',array('as'=>'events','uses'=>'page@Events'));
Route::get('/shop',array('as'=>'shop','uses'=>'page@Shop'));
Route::get('/detailshop',array('as'=>'detailshop','uses'=>'page@DetailShop'));
Route::get('/blog',array('as'=>'blog','uses'=>'page@Blog'));
Route::get('/video',array('as'=>'video','uses'=>'page@Video'));
Route::get('/checkout',array('as'=>'checkout','uses'=>'page@Checkout'));
Route::get('/viewcart',array('as'=>'viewcart','uses'=>'page@ViewCart'));

Route::get('/admin',array('as'=>'login','uses'=>'page@Login'));

Auth::routes();

Route::get('/home', 'HomeController@index');
