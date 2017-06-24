<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Lmusic;
use Validator;
use Response;
use Storage;
use Illuminate\Support\Facades\Input;

class LMusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lmusic = Lmusic::get();
        // show data to our view
        return view('admin.music.musics')->with('lmusic',$lmusic);
    }

    // edit data function
    public function editItem(Request $req) {

        $lmusic = Lmusic::find ($req->input('id'));

        $lmusic->imgpath = $req->imgpath;
        $lmusic->imgpath2 = $req->imgpath2;
        $lmusic->title = $req->title;
        $lmusic->tag = $req->tag;
        $lmusic->save();
        return response()->json($lmusic);
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
        $this->validate($request, [
            'imgpath' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imgpath2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'tag' => 'required',
        ]);

        $lmusic = new Lmusic;

        $lmusic->imgpath = $request->imgpath->getClientOriginalName();
        $lmusic->imgpath2 = $request->imgpath2->getClientOriginalName();
        $lmusic->title = $request->title;
        $lmusic->tag = $request->tag;

        $lmusic->save();
        $imageName = $request->file('imgpath')->getClientOriginalName();

        $request->file('imgpath')->move(
            base_path() . '/public/img/albums/', $imageName);
        $imageName2 = $request->file('imgpath2')->getClientOriginalName();

        $request->file('imgpath2')->move(
            base_path() . '/public/img/albums/', $imageName2);
        return redirect()->back()->with('success','Data has been saved successfully')->with('imageName',$imageName)->with('imageName2',$imageName2);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($lmusic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // delete item
    public function deleteItem(Request $req) {
      $lmusic = Lmusic::find($req->id);
      unlink(public_path('img/albums/'.$lmusic->imgpath));
      unlink(public_path('img/albums/'.$lmusic->imgpath2));
      $lmusic->delete();
      return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
