<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Playlists;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlist = Playlists::get();
        // show data to our view
        return view('admin.playlist.index')->with('playlist',$playlist); 
    }

    // edit data function
    public function editItem(Request $req) {

        $playlist = Playlists::find ($req->input('id'));

        $playlist->title = $req->title;
        $playlist->audiopath = $req->audiopath;
        $playlist->imgthumbnailpath = $req->imgthumbnailpath;
        
        $playlist->save();
        return response()->json($playlist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
        	'title' => 'required',
        	'audiopath' => 'mimes:mpga',
            'imgthumbnailpath' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ];

        $playlist = new Playlists;
           
        $playlist->title = $request->title;

        $validation = Validator::make($request->except('_token'), $rules);
        if ($validation->passes()) {
        
        if($request->hasFile('audiopath')){
            $playlist->title = $request->title;
            $playlist->audiopath = $request->audiopath->getClientOriginalName();

            $audio = $request->file('audiopath')->getClientOriginalName();
            $request->file('audiopath')->move(
            base_path() . '/public/audio/', $audio);
        }

        if($request->hasFile('imgthumbnailpath')){
            $playlist->title = $request->title;
            $playlist->imgthumbnailpath = $request->imgthumbnailpath->getClientOriginalName();

            $imageName = $request->file('imgthumbnailpath')->getClientOriginalName();

            $request->file('imgthumbnailpath')->move(
            base_path() . '/public/img/player/', $imageName);

            $playlist->save();
            return redirect()->back()->with('success','Data has been saved successfully')->with('imageName',$imageName);
        }

        $playlist->save();
        return redirect()->back()->with('success','Data has been saved successfully');

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($playlist);
    }

    public function deleteItem(Request $req) {
      $playlist = Playlists::find($req->id);
      if(is_null($playlist->audiopath)){

      }
      elseif($playlist->audiopath){
        unlink(public_path('/audio/'.$playlist->audiopath));
        unlink(public_path('/img/player/'.$playlist->imgthumbnailpath));
      }

      $playlist->delete();
      return response()->json();
    }
}
