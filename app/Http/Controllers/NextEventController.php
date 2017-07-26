<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Nextevent;
use Validator;
use Response;
use Storage;
use Illuminate\Support\Facades\Input;

class NextEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nevent = Nextevent::get();
        // show data to our view
        return view('admin.nextevent.index')->with('nevent',$nevent);
    }

    // edit data function
    public function editItem(Request $req) {

        $nevent = Nextevent::find ($req->input('id'));

        $nevent->backgroundpic = $req->backgroundpic;
        $nevent->logoeventpic = $req->logoeventpic;
        $nevent->datemax = $req->datemax;
        $nevent->link = $req->link;
        $nevent->save();
        return response()->json($nevent);
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
            'backgroundpic' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'logoeventpic' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'datemax' => 'required',
            'link' => 'required',
        ]);

        $nevent = new Nextevent;

        $b = rand(11111, 99999);

        $nevent->backgroundpic = $b."-".$request->backgroundpic->getClientOriginalName();
        $nevent->logoeventpic = $b."-".$request->logoeventpic->getClientOriginalName();
        $nevent->datemax = $request->datemax;
        $nevent->link = $request->link;

        $nevent->save();
        $imageName = $b."-".$request->file('backgroundpic')->getClientOriginalName();

        $request->file('backgroundpic')->move(
            public_path() . '/img/events/', $imageName);

        $imageName2 = $b."-".$request->file('logoeventpic')->getClientOriginalName();

        $request->file('logoeventpic')->move(
            public_path() . '/img/events/', $imageName2);
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
        return response()->json($nevent);
    }

    // delete item
    public function deleteItem(Request $req) {
        $nevent = Nextevent::find($req->id);

        $directory = public_path('img/events/' . $nevent->backgroundpic);
        $directory2 = public_path('img/events/' . $nevent->logoeventpic);

        if (file_exists($directory)) {
            unlink(public_path('img/events/'.$nevent->backgroundpic));
        }
        elseif(file_exists($directory2)){
            unlink(public_path('img/events/'.$nevent->logoeventpic));
        }

      $nevent->delete();
      return redirect()->back()->withErrors(['berhasil' => '1']);
    }
}
