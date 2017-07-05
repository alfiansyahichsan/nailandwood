<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Musics;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class MusicsController extends Controller
{
    public function index()
    {
        $musics = Musics::get();
        // show data to our view
        return view('admin.musicpage.index')->with('musics',$musics);    
    }

    // edit data function
    public function editItem(Request $req) {

        $musics = Musics::find ($req->input('id'));

        $musics->title = $req->title;
        $musics->release = $req->release;
        $musics->label = $req->label;
        $musics->format = $req->format;
        $musics->save();
        return response()->json($musics);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'release' => 'required',
            'label' => 'required',
            'format' => 'required',
        ]);

        $musics = new Musics;

        $musics->title = $request->title;
        $musics->release = $request->release;
        $musics->label = $request->label;
        $musics->format = $request->format;

        $musics->save();
        return redirect()->back()->with('success','Data has been saved successfully');
    }

    public function show($id)
    {
        return response()->json($musics);
    }

    // delete item
    public function deleteItem(Request $req) {
      Musics::find($req->id)->delete();
      return response()->json();
    }
}
