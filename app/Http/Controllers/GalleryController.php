<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Gallery;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::get();
        // show data to our view
        return view('admin.gallery.index')->with('gallery',$gallery); 
    }

    // edit data function
    public function editItem(Request $req) {

        $gallery = Gallery::find ($req->input('id'));

        $gallery->imgpath = $req->imgpath;
        $gallery->title = $req->title;
        $gallery->save();
        return response()->json($gallery);
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
            'imgpath' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|max:255',
        ]);

        $gallery = new Gallery;

        $b = rand(11111, 99999);

        $gallery->imgpath = $b."-".$request->imgpath->getClientOriginalName();
        $gallery->title = $request->title;

        $gallery->save();
        $imageName = $b."-".$request->file('imgpath')->getClientOriginalName();

        $request->file('imgpath')->move(
            public_path() . '/img/gallery/', $imageName);

        return redirect()->back()->with('success','Data has been saved successfully')->with('imageName',$imageName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($gallery);
    }

    public function deleteItem(Request $req) {
        $gallery = Gallery::find($req->id);

        $directory = public_path('img/gallery/' . $gallery->imgpath);

        if (file_exists($directory)) {
            unlink(public_path('img/gallery/'.$gallery->imgpath));
            }

        $gallery->delete();
        return redirect()->back()->withErrors(['berhasil' => '1']);
    }
}
