<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shorts;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    //

    public function create()
    {
        return view('admin.shorts.create_shorts');
    }


    public function StoreShort(Request $request){
        $request->validate([
            'shorts_name'=>'required',
            'shorts_url'=>'required',
            'shorts_description'=>'required'

        ]);
//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);

        Shorts::insert([
            'shorts_name' => $request->shorts_name,
            'shorts_url' => $request->shorts_url,
            'shorts_description' => $request->shorts_description,

        ]);

        $notification = array(
            'message' => 'Short Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.shorts')->with($notification);


    } // End Method



    public function AllShorts()
    {
        $shorts = Shorts::all();

        return view('admin.shorts.index_shorts', compact('shorts'));

    }
    public function EditShort($id){

        $short = Shorts::findOrFail($id);
        return view('admin.shorts.edit_shorts',compact('short'));
    }// End Method
    public function UpdateShort(Request $request)
    {

        $short_id = $request->id;

        Shorts::findOrFail($short_id)->update([
            'shorts_name' => $request->shorts_name,
            'shorts_url' => $request->shorts_url,
            'shorts_description' => $request->shorts_description,

        ]);
        $notification = array(
            'message' => 'Short Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.shorts')->with($notification);
//
    }


    public function DeleteShort($id){


        Shorts::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Short  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}
