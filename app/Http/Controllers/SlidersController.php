<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slider;
use Validator;
use Response;
use Illuminate\Support\Facades\Input; 

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::get();
        // show data to our view
        return view('admin.slider.sliders')->with('slider',$slider);
    }

    // edit data function
    public function editItem(Request $req) {

        $slider = Slider::find ($req->input('id'));

        $slider->imagepathslider = $req->imagepathslider;
        $slider->title = $req->title;
        $slider->text = $req->text;
        $slider->category = $req->category;
        $slider->save();
        return response()->json($slider);
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
            'imagepathslider' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'max:45',
            'category' => '',
        ]);

        $slider = new Slider;

        $b = rand(11111, 99999);

        $slider->imagepathslider = $b."-".$request->imagepathslider->getClientOriginalName();
        $slider->title = $request->title;
        $slider->text = $request->text;
        $slider->category = $request->category;

        $slider->save();
        $imageName = $b."-".$request->file('imagepathslider')->getClientOriginalName();

        $request->file('imagepathslider')->move(
            public_path() . '/img/header/', $imageName);

        return redirect()->back()->with('success','Data has been saved successfully')->with('imageName',$imageName);
    }

    public function show($id)
    {
        return response()->json($event);
    }

    public function deleteItem(Request $req) {
      $slider = Slider::find($req->id);

      $directory = public_path('img/header/' . $slider->imagepathslider);

      if (file_exists($directory)) {
            unlink(public_path('img/header/'.$slider->imagepathslider));
            }
      
      $slider->delete();
      return redirect()->back()->withErrors(['berhasil' => '1']);
    }
}
