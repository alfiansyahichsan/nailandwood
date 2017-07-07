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

Route::resource('admin/musics','MusicsController');
Route::get('/admin/musics',array('as'=>'musics','uses'=>'MusicsController@index'));
Route::post ( '/admin/musics/editItem', 'MusicsController@editItem' );
Route::post ( '/admin/musics/deleteItem', 'MusicsController@deleteItem' );

Route::resource('admin/lvideo','LVideoController');
Route::get('/admin/lvideo',array('as'=>'lvideo','uses'=>'LVideoController@index'));
Route::post ( '/admin/lvideo/editItem', 'LVideoController@editItem' );
Route::post ( '/admin/lvideo/deleteItem', 'LVideoController@deleteItem' );

Route::resource('admin/quotation','QuotationController');
Route::get('/admin/quotation',array('as'=>'quotation','uses'=>'QuotationController@index'));
Route::post ( '/admin/quotation/editItem', 'QuotationController@editItem' );
Route::post ( '/admin/quotation/deleteItem', 'QuotationController@deleteItem' );

Route::resource('admin/gallery','GalleryController');
Route::get('/admin/lgallery',array('as'=>'lgallery','uses'=>'GalleryController@index'));
Route::post ( '/admin/gallery/editItem', 'GalleryController@editItem' );
Route::post ( '/admin/gallery/deleteItem', 'GalleryController@deleteItem' );

Route::get('/socmed',array('as'=>'socmed','uses'=>'admin@Socmed'));
Route::get('/musicalbum',array('as'=>'musicalbum','uses'=>'admin@MusicAlbum'));
Route::get('/news',array('as'=>'news','uses'=>'admin@News'));
Route::get('/videos',array('as'=>'videos','uses'=>'admin@Videos'));
Route::get('/playlist',array('as'=>'playlist','uses'=>'admin@Playlist'));

Route::resource('admin/nevent','NextEventController');
Route::get('/admin/nevent',array('as'=>'nevent','uses'=>'NextEventController@index'));
Route::post ( '/admin/nevent/editItem', 'NextEventController@editItem' );
Route::post ( '/admin/nevent/deleteItem', 'NextEventController@deleteItem' );

Route::resource('admin/news','NewsController');
Route::get('/admin/news',array('as'=>'news','uses'=>'NewsController@index'));
Route::post ( '/admin/news/editItem', 'NewsController@editItem' );
Route::post ( '/admin/news/deleteItem', 'NewsController@deleteItem' );

Route::get('/news/{param}',array('as'=>'blogsingle','uses'=>'page@BlogSingle'));


Route::resource('admin/blog','BlogsController');
Route::get('/admin/blog',array('as'=>'lblog','uses'=>'BlogsController@index'));
Route::post ( '/admin/blog/editItem', 'BlogsController@editItem' );
Route::post ( '/admin/blog/deleteItem', 'BlogsController@deleteItem' );

Route::get('/blog/{param}',array('as'=>'blogpersonal','uses'=>'page@Blogpersonal'));

Route::resource('admin/biography','BiographyController');
Route::get('/admin/biography',array('as'=>'lbiography','uses'=>'BiographyController@index'));
Route::post ( '/admin/biography/editItem', 'BiographyController@editItem' );
Route::post ( '/admin/biography/deleteItem', 'BlogsController@deleteItem' );

Route::resource('admin/lshop','ShopController');
Route::get('/admin/lshop',array('as'=>'lshop','uses'=>'ShopController@index'));
Route::post ( '/admin/lshop/editItem', 'ShopController@editItem' );
Route::post ( '/admin/lshop/deleteItem', 'ShopController@deleteItem' );

Route::get('/shop/{param}',array('as'=>'detailshop','uses'=>'page@Detailshop'));

Route::resource('admin/lplaylist','PlaylistController');
Route::get('/admin/lplaylist',array('as'=>'lplaylist','uses'=>'PlaylistController@index'));
Route::post ( '/admin/lplaylist/editItem', 'PlaylistController@editItem' );
Route::post ( '/admin/lplaylist/deleteItem', 'PlaylistController@deleteItem' );

Route::resource('admin/labout','AboutblogController');
Route::get('/admin/labout',array('as'=>'labout','uses'=>'AboutblogController@index'));
Route::post ( '/admin/labout/editItem', 'AboutblogController@editItem' );
Route::post ( '/admin/labout/deleteItem', 'AboutblogController@deleteItem' );


Route::resource('admin/bank','BankController');
Route::get('/admin/bank',array('as'=>'bank','uses'=>'BankController@index'));
Route::post ( '/admin/bank/editItem', 'BankController@editItem' );
Route::post ( '/admin/bank/deleteItem', 'BankController@deleteItem' );


Route::get('/',array('as'=>'home','uses'=>'page@Home'));

Route::post ( '/biography', 'BiographyController@postContact' );

Route::get('/biography',array('as'=>'biography','uses'=>'page@Biography'));
Route::get('/gallery',array('as'=>'gallery','uses'=>'page@Gallery'));
Route::get('/gallerysingle',array('as'=>'gallerysingle','uses'=>'page@GallerySingle'));
Route::get('/music',array('as'=>'music','uses'=>'page@Music'));
Route::get('/events',array('as'=>'events','uses'=>'page@Events'));
Route::get('/shop',array('as'=>'shop','uses'=>'page@Shop'));
Route::get('/blog',array('as'=>'blog','uses'=>'page@Blog'));
Route::get('/video',array('as'=>'video','uses'=>'page@Video'));
Route::get('/checkout',array('as'=>'checkout','uses'=>'page@Checkout'));
Route::get('/viewcart',array('as'=>'viewcart','uses'=>'page@ViewCart'));

Route::get('/admin',array('as'=>'login','uses'=>'page@Login'));

Auth::routes();

Route::get('/home', 'HomeController@index');



// Transaksi


Route::get('/cart',array('as' => 'cart', 'uses' => 'CartController@ListCart'));
Route::post('/cart/tambah', array('as'=>'cart.add','uses'=>'CartController@postAddToCart'));
Route::post('/cart/tambah/produk/',array('as' => 'cart.tambah', 'uses' => 'CartController@TambahCart'));
Route::get('/cart/hapus', array('as'=>'cart.hapus','uses'=>'CartController@getDelete'));


Route::get('/form',array('as' => 'form', 'uses' => 'CartController@Formdata'));
Route::post('/form',array('as' => 'buatorder', 'uses' => 'CartController@BuatOrder'));
Route::get('/order/{telepon}',array('as' => 'order', 'uses' => 'OrderController@GetOrder'));
Route::get('/order/hapus/{telepon}', array('as'=>'order.hapus','uses'=>'OrderController@GetDelete'));
Route::post('/order/konfirmasi', array('as'=>'order.konfirmasi','uses'=>'OrderController@KonfirmasiPembayaran'));
Route::post('/order/',array('as' => 'cariorder', 'uses' => 'OrderController@CariOrder'));

Route::get('/konfirmasi',array('as' => 'konfirmasi', 'uses' => 'PagesController@Konfirmasi'));


Route::get('/admin/transaksi',array('as' => 'transaksi', 'uses' => 'TransaksiController@Transaksi'));
Route::get('/admin/transaksi/{transaksi}',array('as' => 'admin.transaksi.detail', 'uses' => 'TransaksiController@DetailTransaksi'));
Route::post('/admin/transaksi/',array('as' => 'admin.transaksi.detail.konfirmasi', 'uses' => 'TransaksiController@KonfirmasiTransaksi'));