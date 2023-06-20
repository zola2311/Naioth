<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Others;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OthersController extends Controller
{
    public function create()
    {
        return view('admin.others.create_others');
    }


    public function StoreOthers(Request $request){

//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);
        $request->validate([
            'others_name'=>'required',
            'others_url'=>'required|url',
            'others_description'=>'required'

        ]);
        Others::insert([
            'others_name' => $request->others_name,
            'others_url' => $request->others_url,
            'others_description' => $request->others_description,

        ]);

        $notification = array(
            'message' => 'Collection Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.others')->with($notification);


    } // End Method



    public function AllOthers()
    {
        $others = Others::all();

        return view('admin.others.index_others', compact('others'));

    }
    public function EditOthers($id){

        $others = Others::findOrFail($id);
        return view('admin.others.edit_others',compact('others'));
    }// End Method
    public function UpdateSeries(Request $request)
    {

        $other_id = $request->id;

        Others::findOrFail($other_id)->update([
            'others_name' => $request->others_name,
            'others_url' => $request->others_url,
            'others_description' => $request->others_description,

        ]);
        $notification = array(
            'message' => 'Others Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.others')->with($notification);
//
    }


    public function DeleteOthers($id){


        Others::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Collection  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}
