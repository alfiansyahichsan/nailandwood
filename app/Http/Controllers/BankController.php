<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bank;
use DB;
use Validator;
use Response;
use Storage;

class BankController extends Controller
{
    public function index()
    {
        $bank = Bank::get();
        // show data to our view
        return view('admin.bank.index')->with('bank',$bank);
    }

    // edit data function
    public function editItem(Request $req) {

        $bank = Bank::find ($req->input('id'));

        $bank->gambar = $req->imgpath;
        $bank->bank = $req->bank;
        $bank->norek = $req->norek;
        $bank->nama = $req->nama;
        $bank->save();
        return response()->json($bank);
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
            'bank' => 'required',
            'norek' => 'required',
        ]);

        $bank = new Bank;

        $bank->gambar = $request->imgpath->getClientOriginalName();
        $bank->bank = $request->bank;
        $bank->norek = $request->norek;
        $bank->nama = $request->nama;

        $bank->save();
        $imageName = $request->file('imgpath')->getClientOriginalName();

        $request->file('imgpath')->move(
            base_path() . '/public/img/bank/', $imageName);

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
        //return response()->json($bank);
    }

    public function deleteItem(Request $req) {
        $bank = Bank::find($req->id);
        unlink(public_path('img/bank/'.$bank->gambar));
        $bank->delete();
        return response()->json();
    }
}
