<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;

class page extends Controller
{
	/* admin */
	public function Login(){
		return view('auth/login');
	}	

	public function Home(){
		$lvideo = \App\Lvideo::first()->get();
		$slider = \App\Slider::where('category', 1)->get();
		$quotation = \App\Slider::where('category', 5)->get();
		$lmusic = \App\Lmusic::get();
		$event = \App\Event::orderBy('id', 'DESC')->get();
		$quote = \App\Quotation::get();
		$nevent = \App\Nextevent::get();
		$news = \App\News::get();
		$playlist = \App\Playlists::get();
		return view('index', [
                'lvideo' => $lvideo,
                'slider' => $slider,
                'lmusic' => $lmusic,
                'event' => $event,
                'quote' => $quote,
                'nevent' => $nevent,
                'news' => $news,
                'playlist' => $playlist,
                'quotation' => $quotation

            ]);
	}

	public function Biography(){
		$slider = \App\Slider::where('category', 3)->get();
		$bio = \App\Biography::get();
		return view('biography', [
                'slider' => $slider,
                'bio' => $bio

            ]);
	}

	public function Gallery(){
		$gallery = \App\Gallery::orderBy('created_at','DESC')->paginate(9);
		return view('gallery', [
                'gallery' => $gallery

            ]);
	}

	public function GallerySingle(){
		return view('gallerysingle');
	}

	public function Music(){
		$slider = \App\Slider::where('category', 6)->get();
		$playlist = \App\Playlists::get();
		$musics = \App\Musics::get();
		return view('music', [
				'slider' => $slider,
                'playlist' => $playlist,
                'musics' => $musics
                
            ]);
	}

	public function Events(){
		return view('events');
	}

	public function Shop(){
		$slider = \App\Slider::where('category', 4)->get();
		$shop = \App\Shop::get();
		return view('shop', [
                'slider' => $slider,
                'shop' => $shop

            ]);
	}

	public function Detailshop($param){
		$shop = \App\Shop::where('id',$param)->first();
		$related = \App\Shop::whereNotIn('id', [$param])->get();
		return view('detailshop', [
                'shop' => $shop,
                'related' => $related

            ]);
	}

	public function DetailEvent(){
		return view('detailevent');
	}

	public function Blog(){
		$slider = \App\Slider::where('category', 2)->get();
		$about = \App\Aboutblog::get();
		$blogs = \App\Blog::orderBy('created_at','DESC')->paginate(5);
		return view('blog', [
                'slider' => $slider,
                'blogs' => $blogs,
                'about' => $about

            ]);
	}

	public function Video(){
		$lvideo = \App\Lvideo::orderBy('created_at','DESC')->paginate(4);
		return view('video', [
                'lvideo' => $lvideo

            ]);
	}

	public function Checkout(){
		return view('checkout');
	}

	public function ViewCart(){
		return view('viewcart');
	}
	
	public function BlogSingle($param){
		$news = \App\News::where('id',$param)->first();
		$next = \App\News::where('id','>',$param)->first();
		$previous = \App\News::where('id','<',[$param])->first();
		return view('blogsingle', [
                'news' => $news,
                'next' => $next,
                'previous' => $previous

            ]);
	}

	public function Blogpersonal($param){
		$blogs = \App\Blog::where('id',$param)->first();
		$recent = \App\Blog::whereNotIn('id', [$param])->get();
		$about = \App\Aboutblog::get();
		$next = \App\News::where('id','>',$param)->first();
		$previous = \App\News::where('id','<',[$param])->first();
		return view('blogpersonal', [
                'blogs' => $blogs,
                'recent' => $recent,
                'about' => $about,
                'next' => $next,
                'previous' => $previous


            ]);
	}
}
