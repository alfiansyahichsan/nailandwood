<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Aboutblog;
use DB;
use Validator;
use Response;
use Storage;
use Illuminate\Support\Facades\Input;

class AboutblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Aboutblog::get();
        // show data to our view
        return view('admin.about.index')->with('about',$about); 
    }

    // edit data function
    public function editItem(Request $req) {

        $about = Aboutblog::find ($req->input('id'));

        $about->imgpath = $req->imgpath;
        $about->title = $req->title;
        $about->text = $req->text;
        $about->save();
        return response()->json($about);
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
            'title' => 'required',
            'text' => 'required',
        ]);

        $about = new Aboutblog;

        $about->imgpath = $request->imgpath->getClientOriginalName();
        $about->title = $request->title;
        $about->text = $request->text;

        $about->save();
        $imageName = $request->file('imgpath')->getClientOriginalName();

        $request->file('imgpath')->move(
            base_path() . '/public/img/logo/', $imageName);

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
        return response()->json($about);
    }

    public function deleteItem(Request $req) {
      $about = Aboutblog::find($req->id);
      unlink(public_path('img/logo/'.$about->imgpath));
      $about->delete();
      return response()->json();
    }
}
