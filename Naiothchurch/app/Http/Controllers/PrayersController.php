<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prayers;
use Illuminate\Http\Request;

class PrayersController extends Controller
{
    //
    public function create()
    {
        return view('admin.prayers.create_prayers');
    }


    public function StorePrayer(Request $request){

//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);
        $request->validate([
            'prayers_name'=>'required',
            'prayers_url'=>'required',
            'prayers_description'=>'required'

        ]);
        Prayers::insert([
            'prayers_name' => $request->prayers_name,
            'prayers_url' => $request->prayers_url,
            'prayers_description' => $request->prayers_description,

        ]);

        $notification = array(
            'message' => 'Prayer Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.prayers')->with($notification);


    } // End Method



    public function AllPrayers()
    {
        $prayers = Prayers::all();

        return view('admin.prayers.index_prayers', compact('prayers'));

    }
    public function EditPrayer($id){

        $prayer = Prayers::findOrFail($id);
        return view('admin.prayers.edit_prayers',compact('prayer'));
    }// End Method
    public function UpdatePrayer(Request $request)
    {

        $prayer_id = $request->id;

        Prayers::findOrFail($prayer_id)->update([
            'prayers_name' => $request->prayers_name,
            'prayers_url' => $request->prayers_url,
            'prayers_description' => $request->prayers_description,

        ]);
        $notification = array(
            'message' => 'Prayer Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.prayers')->with($notification);
//
    }


    public function DeletePrayer($id){


        Prayers::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Prayer  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}
