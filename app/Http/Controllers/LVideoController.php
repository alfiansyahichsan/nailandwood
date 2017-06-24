<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Lvideo;
use DB;
use Validator;
use Response;
use Storage;
use Illuminate\Support\Facades\Input;

class LVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lvideo = Lvideo::get();
        // show data to our view
        return view('admin.video.index',['lvideo'=>$lvideo]);
    }
 // edit data function
    public function editItem(Request $req) {

        $lvideo = Lvideo::find ($req->input('id'));

        $lvideo->link = $req->link;
        $lvideo->title = $req->title;
        $lvideo->story = $req->story;
        $lvideo->save();
        return response()->json($lvideo);
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
            'link' => 'required',
            'title' => 'required',
            'story' => 'required',
        ]);

        $lvideo = new Lvideo;

        $lvideo->link = $request->link;
        $lvideo->title = $request->title;
        $lvideo->story = $request->story;
        $lvideo->save();

        return redirect()->back()->with('success','Data has been saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($lvideo);
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

      $lvideo = Lvideo::find($req->id);
      $lvideo->delete();
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
