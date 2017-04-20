<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page extends Controller
{
	/* admin */
	public function Login(){
		return view('auth/login');
	}	

	public function Home(){
		return view('index');
	}

	public function Biography(){
		return view('biography');
	}

	public function Gallery(){
		return view('gallery');
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

	public function Blog(){
		return view('blog');
	}

	public function Video(){
		return view('video');
	}

	public function Checkout(){
		return view('checkout');
	}

	public function ViewCart(){
		return view('viewcart');
	}
}
