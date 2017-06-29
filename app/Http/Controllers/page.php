<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class page extends Controller
{
	/* admin */
	public function Login(){
		return view('auth/login');
	}	

	public function Home(){
		$lvideo = \App\Lvideo::get();
		$slider = \App\Slider::where('category', 1)->get();
		$quotation = \App\Slider::where('category', 5)->get();
		$lmusic = \App\Lmusic::get();
		$event = \App\Event::orderBy('id', 'DESC')->get();
		$quote = \App\Quotation::get();
		$nevent = \App\Nextevent::get();
		$news = \App\News::get();
		return view('index', [
                'lvideo' => $lvideo,
                'slider' => $slider,
                'lmusic' => $lmusic,
                'event' => $event,
                'quote' => $quote,
                'nevent' => $nevent,
                'news' => $news,
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
		$gallery = \App\Gallery::get();
		return view('gallery', [
                'gallery' => $gallery

            ]);
	}

	public function GallerySingle(){
		return view('gallerysingle');
	}

	public function Music(){
		return view('music');
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
		return view('detailshop', [
                'shop' => $shop

            ]);
	}

	public function DetailEvent(){
		return view('detailevent');
	}

	public function Blog(){
		$slider = \App\Slider::where('category', 2)->get();
		$about = \App\Aboutblog::get();
		$blogs = \App\Blog::get();
		return view('blog', [
                'slider' => $slider,
                'blogs' => $blogs,
                'about' => $about

            ]);
	}

	public function Video(){
		$lvideo = \App\Lvideo::whereNotIn('id',[1])->get();
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
		return view('blogsingle', [
                'news' => $news

            ]);
	}

	public function Blogpersonal($param){
		$blogs = \App\Blog::where('id',$param)->first();
		$about = \App\Aboutblog::get();
		return view('blogpersonal', [
                'blogs' => $blogs,
                'about' => $about

            ]);
	}
}
