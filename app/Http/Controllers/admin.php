<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
	public function Dashboards(){
		return view('admin.dashboards');
	}

	public function Slider(){
		return view('admin.slider');
	}

	public function Socmed(){
		return view('admin.socmed');
	}
}
