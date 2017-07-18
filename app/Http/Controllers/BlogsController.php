<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Blog;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        // show data to our view
        return view('admin.blog.index',['blogs' => $blogs]);
    }

    // edit data function
    public function editItem(Request $req) {

        $blogs = Blog::find ($req->input('id'));

        $blogs->imgpath = $req->imgpath;
        $blogs->linkvideo = $req->linkvideo;
        $blogs->title = $req->title;
        $blogs->text = $req->text;
        $blogs->category = $req->category;
        $blogs->save();
        return response()->json($blogs);
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

        $blogs = new Blog;

        $b = rand(11111, 99999);
        
        $validation = Validator::make($request->except('_token'), $rules);
        if ($validation->passes()) {
        
        if($request->has('linkvideo')){
            $blogs->linkvideo = $request->linkvideo;
            $blogs->title = $request->title;
            $blogs->text = $request->text;
            $blogs->category = $request->category;
        }
        if($request->hasFile('imgpath')){
            $blogs->imgpath = $b."-".$request->imgpath->getClientOriginalName();
            $blogs->linkvideo = $request->linkvideo;
            $blogs->title = $request->title;
            $blogs->text = $request->text;
            $blogs->category = $request->category;
            $imageName = $b."-".$request->file('imgpath')->getClientOriginalName();

            $request->file('imgpath')->move(
                base_path() . '/public/img/blog/', $imageName);
            $blogs->save();
            return redirect()->back()->with('success','Data has been saved successfully')->with('imageName',$imageName);
        }
        else{
            $blogs->title = $request->title;
            $blogs->text = $request->text;
            $blogs->category = $request->category;
        }
            
        $blogs->save();
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
      $blogs = Blog::find($req->id);
      if(is_null($blogs->imgpath)){

      }
      elseif($blogs->imgpath){
        unlink(public_path('img/blog/'.$blogs->imgpath));
      }

      $blogs->delete();
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
