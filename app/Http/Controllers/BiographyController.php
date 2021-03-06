<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Biography;
use Validator;
use Response;
use Mail;
use Session;
use Illuminate\Support\Facades\Input;

class BiographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bio = Biography::get();
        // show data to our view
        return view('admin.biography.index')->with('bio',$bio);
    }

    // edit data function
    public function editItem(Request $req) {
        
        $bio = Biography::find ($req->input('id'));

        $bio->text = $req->text;
        $bio->alamat = $req->alamat;
        $bio->email = $req->email;
        $bio->phone = $req->phone;
        $bio->save();
        return response()->json($bio);
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
            'text' => 'required',
            'alamat' => 'required|max:45',
            'email' => 'required|email|max:45',
            'phone' => 'required|numeric',
        ]);

        $bio = new Biography;

        $bio->text = $request->text;
        $bio->alamat = $request->alamat;
        $bio->email = $request->email;
        $bio->phone = $request->phone;

        $bio->save();
        return redirect()->back()->with('success','Data has been saved successfully');    
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'firstname' => 'required',
            'subject' => 'required|min:3',
            'message' => 'required|min:7']);

        $data = array(
            'email' => $request->email,
            'firstname' => $request->firstname,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
            );

        Mail::send('mail', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('sundfor0@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success','Your email has been sent');
        return redirect('biography');
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
      Biography::find($req->id)->delete();
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
