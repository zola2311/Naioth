<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function create()
    {
        return view('admin.events.create_events');
    }


    public function StoreEvent(Request $request){

        $request->validate([
            'events_name'=>'required',
            'events_url'=>'required',
            'events_description'=>'required'

        ]);
        Events::insert([
            'events_name' => $request->events_name,
            'events_url' => $request->events_url,
            'events_description' => $request->events_description,

        ]);

        $notification = array(
            'message' => 'Event Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.events')->with($notification);


    } // End Method



    public function AllEvents()
    {
        $events = Events::all();

        return view('admin.events.index_events', compact('events'));

    }
    public function EditEvent($id){

        $event = Events::findOrFail($id);
        return view('admin.events.edit_events',compact('event'));
    }// End Method
    public function UpdateEvent(Request $request)
    {

        $event_id = $request->id;

        Events::findOrFail($event_id)->update([
            'events_name' => $request->events_name,
            'events_url' => $request->events_url,
            'events_description' => $request->events_description,

        ]);
        $notification = array(
            'message' => 'Event Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.events')->with($notification);
//
    }


    public function DeleteEvent($id){


        Events::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Event  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method

}
