<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Others;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    //
    //
    public function create()
    {
        return view('admin.others.create_others');
    }


    public function store(Request $request)
    {
        $request->validate([
            'others_name'=>'required',
            'others_url'=>'required',
            'others_description'=>'required'

        ]);
//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);

        Others::insert([
            'others_name' => $request->others_name,
            'others_url' => $request->others_url,
            'others_description' => $request->others_description,

        ]);

        $notification = array(
            'message' => 'Other Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.others')->with($notification);

    }

    public function index()
    {
        $others = Others::all();

        return view('admin.others.index_others', compact('others'));

    }
    public function EditOther($id){

        $other = Others::findOrFail($id);
        return view('admin.others.edit_others',compact('other'));
    }// End Method
    public function UpdateOther(Request $request)
    {

        $other_id = $request->id;

        Others::findOrFail($other_id)->update([
            'others_name' => $request->others_name,
            'others_url' => $request->others_url,
            'others_description' => $request->others_description,

        ]);
        $notification = array(
            'message' => 'Other Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.others')->with($notification);
//
    }


    public function DeleteOther($id){


        Others::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Other  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}
