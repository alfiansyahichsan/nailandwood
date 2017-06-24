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
		$slider = \App\Slider::get();
		$lmusic = \App\Lmusic::get();
		$event = \App\Event::orderBy('id', 'DESC')->get();
		$quote = \App\Quotation::get();
		return view('index', [
                'lvideo' => $lvideo,
                'slider' => $slider,
                'lmusic' => $lmusic,
                'event' => $event,
                'quote' => $quote

            ]);
	}

	public function Biography(){
		return view('biography');
	}

	public function Gallery(){
		return view('gallery');
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
		return view('shop');
	}

	public function DetailShop(){
		return view('detailshop');
	}

	public function DetailEvent(){
		return view('detailevent');
	}

	public function Blog(){
		return view('blog');
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

	public function BlogSingle(){
		return view('blogsingle');
	}
}
