<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Subscribe;
use Validator;
use Response;
use Illuminate\Support\Facades\Input; 

class SubscribeController extends Controller
{
    public function index()
    {
        $subscribe = Subscribe::get();
        // show data to our view
        return view('admin.subscribe.index')->with('subscribe',$subscribe); 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|Email',
        ]);

        $subscribe = new Subscribe;

        $subscribe->email = $request->email;

        $subscribe->save();

        return redirect()->back()->with('success',"thanks for submiting!!");
    }

    // delete item
    public function deleteItem(Request $req) {
      Subscribe::find($req->id)->delete();
      return response()->json();
    }
}
