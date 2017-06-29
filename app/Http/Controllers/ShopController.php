<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Shop;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Shop::get();
        // show data to our view
        return view('admin.shop.index')->with('shop',$shop); 
    }

    // edit data function
    public function editItem(Request $req) {

        $shop = Shop::find ($req->input('id'));

        $shop->imgpath = $req->imgpath;
        $shop->title = $req->title;
        $shop->detail = $req->detail;
        $shop->price = $req->price;
        $shop->stok = $req->stok;
        $shop->category = $req->category;
        $shop->save();
        return response()->json($shop);
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
            'detail' => 'required',
            'price' => 'required',
            'stok' => 'required',
            'category' => 'required',
        ]);

        $shop = new Shop;

        $shop->imgpath = $request->imgpath->getClientOriginalName();
        $shop->title = $request->title;
        $shop->detail = $request->detail;
        $shop->price = $request->price;
        $shop->stok = $request->stok;
        $shop->category = $request->category;

        $shop->save();
        $imageName = $request->file('imgpath')->getClientOriginalName();

        $request->file('imgpath')->move(
            base_path() . '/public/img/shop/', $imageName);

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
        return response()->json($shop);
    }

    public function deleteItem(Request $req) {
      $shop = Shop::find($req->id);
      unlink(public_path('img/shop/'.$shop->imgpath));
      $shop->delete();
      return response()->json();
    }
}
