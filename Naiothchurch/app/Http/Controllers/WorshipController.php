<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Worships;
use Illuminate\Http\Request;

class WorshipController extends Controller
{
    public function create()
    {
        return view('admin.worships.create_worships');
    }

    public function store(Request $request)
    {
        $request->validate([
            'worships_name'=>'required',
            'worships_url'=>'required',
            'worships_description'=>'required'
        ]);

        //        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);

        Worships::insert([
            'worships_name' => $request->worships_name,
            'worships_url' => $request->worships_url,
            'worships_description' => $request->worships_description,

        ]);

        $notification = array(
            'message' => 'Worship Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.worships')->with($notification);
    }// End Method

    public function index()
    {
        $worships = Worships::all();
        return view('admin.worships.index_worships', compact('worships'));
    }// End Method

    public function EditWorship($id){

        $worship = Worships::findOrFail($id);
        return view('admin.worships.edit_worships',compact('worship'));
    }// End Method

    public function UpdateWorship(Request $request)
    {

        $worship_id = $request->id;

        Worships::findOrFail($worship_id)->update([
            'worships_name' => $request->worships_name,
            'worships_url' => $request->worships_url,
            'worships_description' => $request->worships_description,

        ]);
        $notification = array(
            'message' => 'Worship Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.worships')->with($notification);
    //
    }

    public function DeleteWorship($id){


        Worships::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Worship  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}
