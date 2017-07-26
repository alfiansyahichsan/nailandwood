<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\News;
use DB;
use Validator;
use Response;
use Storage;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        // show data to our view
        return view('admin.news.index')->with('news',$news);
    }

    // edit data function
    public function editItem(Request $req) {

        $news = News::find ($req->input('id'));

        $news->imgpath = $req->imgpath;
        $news->linkvideo = $req->linkvideo;
        $news->title = $req->title;
        $news->text = $req->text;
        $news->category = $req->category;
        $news->save();
        return response()->json($news);
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
            'imgpath' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'linkvideo' => '',
            'title' => 'required|max:45',
            'text' => 'required',
            'category' => 'required',
        ];

        $news = new News;

        $b = rand(11111, 99999);

        $validation = Validator::make($request->except('_token'), $rules);
        if ($validation->passes()) {
        
        if($request->has('linkvideo')){
            $news->linkvideo = $request->linkvideo;
            $news->title = $request->title;
            $news->text = $request->text;
            $news->category = $request->category;
        }
        if($request->hasFile('imgpath')){
            $news->imgpath = $b."-".$request->imgpath->getClientOriginalName();
            $news->title = $request->title;
            $news->text = $request->text;
            $news->category = $request->category;
            $imageName = $b."-".$request->file('imgpath')->getClientOriginalName();

            $request->file('imgpath')->move(
                public_path() . '/img/news/', $imageName);
        }
        $news->save();
            return redirect()->back()->with('success','Data has been saved successfully')->with('imageName',$imageName);
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
      $news = News::find($req->id);
      if(is_null($news->imgpath)){

      }
      elseif($news->imgpath){
        unlink(public_path('img/news/'.$news->imgpath));
      }

      $news->delete();
      return response()->json();
    }
}
