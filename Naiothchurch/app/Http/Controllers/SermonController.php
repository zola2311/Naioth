<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sermons;
use Illuminate\Http\Request;

class SermonController extends Controller
{
    //

    public function create()
    {
        return view('admin.sermons.create_sermons');
    }


    public function StoreSermon(Request $request){

//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);
        $request->validate([
            'sermons_name'=>'required',
            'sermons_url'=>'required',
            'sermons_description'=>'required'

        ]);
        Sermons::insert([
            'sermons_name' => $request->sermons_name,
            'sermons_url' => $request->sermons_url,
            'sermons_description' => $request->sermons_description,

        ]);

        $notification = array(
            'message' => 'Sermon Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.sermons')->with($notification);


    } // End Method



    public function AllSermons()
    {
        $sermons = Sermons::all();

        return view('admin.sermons.index_sermons', compact('sermons'));

    }
    public function EditSermon($id){

        $sermon = Sermons::findOrFail($id);
        return view('admin.sermons.edit_sermons',compact('sermon'));
    }// End Method
    public function UpdateSermon(Request $request)
    {

        $sermon_id = $request->id;

        Sermons::findOrFail($sermon_id)->update([
            'sermons_name' => $request->sermons_name,
            'sermons_url' => $request->sermons_url,
            'sermons_description' => $request->sermons_description,

        ]);
        $notification = array(
            'message' => 'Sermon Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.sermons')->with($notification);
//
    }


    public function DeleteSermon($id){


        Sermons::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Sermon  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}


