<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quote = Quotation::get();
        // show data to our view
        return view('admin.quotation.index')->with('quote',$quote);
    }

    // edit data function
    public function editItem(Request $req) {

        $quote = Quotation::find ($req->input('id'));

        $quote->quote = $req->quote;
        $quote->by = $req->by;
        $quote->save();
        return response()->json($quote);
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
            'quote' => 'required',
            'by' => 'required',
        ]);

        $quote = new Quotation;

        $quote->quote = $request->quote;
        $quote->by = $request->by;

        $quote->save();
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
        return response()->json($quote);
    }

    // delete item
    public function deleteItem(Request $req) {
      $quote = Quotation::find($req->id);
      $quote->delete();
      return response()->json();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
