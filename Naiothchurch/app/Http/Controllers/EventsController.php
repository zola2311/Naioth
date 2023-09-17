<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EventsController extends Controller
{
    public function create()
    {
        return view('admin.events.create_events');
    }

    public function StoreEvent(Request $request){
//        $request->validate([
//            'events_description'=>'required|alpha',
//            'event_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'events_name'=>'required',
//            'events_title'=>'required'
//
//        ],
//            ['event_image.required' => 'Please select an image.',
//            'event_image.image' => 'The file must be an image.',
//            'event_image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.']);

        $event_image = $request->file('event_image');
        $name_gen = hexdec(uniqid()).'.'.$event_image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($event_image)->resize(1020,519)->save('upload/events/'.$name_gen);
        $save_url = 'upload/events/'.$name_gen;

        Events::insert([
            'events_detail' => $request->events_detail,
            'events_title' => $request->events_title,
            'event_image' =>  $save_url,
            'events_description' => $request->events_description,

        ]);

        $notification = array(
            'message' => 'Event Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.events')->with($notification);
    } // End Method

    public function AllEvents()
    {
        $events = Events::all();
        return view('admin.events.index_events', compact('events'));
    }// End Method

    public function EditEvent($id){

        $event = Events::findOrFail($id);
        return view('admin.events.edit_events',compact('event'));
    }// End Method

    public function UpdateEvent(Request $request)
    {
//        $request->validate([
//            'events_description' => 'required|alpha',
//            'event_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'events_detail' => 'required',
//            'events_title' => 'required'
//
//        ],
//            ['event_image.required' => 'Please select an image.',
//                'event_image.image' => 'The file must be an image.',
//                'event_image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.']);

        $event_id = $request->id;

        if ($request->file('event_image')) {
            $image = $request->file('event_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(1020, 519)->save('upload/events/' . $name_gen);
            $save_url = 'upload/events/' . $name_gen;


            Events::findOrFail($event_id)->update([
                'events_detail' => $request->events_name,
                'events_title' => $request->events_url,
                'events_description' => $request->events_description,
                'event_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Event Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.events')->with($notification);
//
        }

        else {

            Events::findOrFail($event_id)->update([
                'events_detail' => $request->events_name,
                'events_title' => $request->events_url,
                'events_description' => $request->events_description,


            ]);
            $notification = array(
                'message' => 'Event Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.events')->with($notification);

        } // end Else
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


