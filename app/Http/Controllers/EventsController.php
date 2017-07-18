<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::get();
        // show data to our view
        return view('admin.event.events')->with('event',$event);    
    }

    // edit data function
    public function editItem(Request $req) {

        $event = Event::find ($req->input('id'));

        $event->date = $req->date;
        $event->eventname = $req->eventname;
        $event->venue = $req->venue;
        $event->location = $req->location;
        $event->tickets = $req->tickets;
        $event->link = $req->link;
        $event->save();
        return response()->json($event);
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
            'date' => 'required',
            'eventname' => 'required|max:45',
            'venue' => 'required|max:45',
            'location' => 'required|max:45',
            'tickets' => 'required|max:10',
        ]);

        $event = new Event;

        $event->date = $request->date;
        $event->eventname = $request->eventname;
        $event->venue = $request->venue;
        $event->location = $request->location;
        $event->tickets = $request->tickets;
        $event->link = $request->link;

        $event->save();
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
        return response()->json($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function edit(Request $id)
    // {
    //     $event = Event::find($id);
    //     return view('acara.edit',compact('event'));

    //     // $this->validate($request, [
    //     //     'date' => 'required',
    //     //     'eventname' => 'required',
    //     //     'venue' => 'required',
    //     //     'location' => 'required',
    //     //     'tickets' => 'required',
    //     // ]);

    //     // $event = Event::find($request->id);
    //     // $event->date = $request->date;
    //     // $event->eventname = $request->eventname;
    //     // $event->venue = $request->venue;
    //     // $event->location = $request->location;
    //     // $event->tickets = $request->tickets;
    //     // $event->save();

    //     // return response()->json($data);

    //     // $event = Event::find($id);
    //     // return view('admin.Event.edits');

    //     // return redirect()->back()->with('hapus','Item updated successfully');
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
    //     $event = Event::find ($req->id);

    //     $event->date = $req->date;
    //     $event->eventname = $req->eventname;
    //     $event->venue = $req->venue;
    //     $event->location = $req->location;
    //     $event->tickets = $req->tickets;
    //     $event->link = $req->link;
    //     $event->save();
    //     return response()->json($event);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // delete item
    public function deleteItem(Request $req) {
      Event::find($req->id)->delete();
      return response()->json();
    }

    // public function destroy($id)
    // {
    //     $event = Event::find($id);
    //     $event->delete();
    //     return redirect()->back()->with('hapus','Item deleted successfully');
    // }
}
