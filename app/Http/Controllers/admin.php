<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
	public function Dashboard(){
		return view('admin.dashboard');
	}

	public function Slider(){
		return view('admin.slider');
	}

	public function Socmed(){
		return view('admin.socmed');
	}

	public function MusicAlbum(){
		return view('admin.musicalbum');
	}

	public function Acara(){
		return view('admin.Event.events');
	}

	public function Create(){
		return view('admin.Event.create');
	}

	public function News(){
		return view('admin.news');
	}

	public function Videos(){
		return view('admin.video');
	}

	public function Playlist(){
		return view('admin.playlist');
	}
}
