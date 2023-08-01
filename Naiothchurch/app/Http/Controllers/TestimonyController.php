<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Testimonies;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonyController extends Controller
{
    //
    public function create()
    {
        return view('admin.testimonies.create_testimonies');
    }

    public function StoreTestimony(Request $request){
        $request->validate([
            'testimonies_name'=>'required',
            'testimonies_url'=>'required|url',
            'testimonies_description'=>'required'
        ]);
//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);

        Testimonies::insert([
            'testimonies_name' => $request->testimonies_name,
            'testimonies_url' => $request->testimonies_url,
            'testimonies_description' => $request->testimonies_description,
        ]);

        $notification = array(
            'message' => 'Testimony Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testimonies')->with($notification);


    } // End Method



    public function AllTestimonies()
    {
        $testimonies = Testimonies::all();

        return view('admin.testimonies.index_testimonies', compact('testimonies'));

    }
    public function EditTestimony($id)
    {
        $testimony = Testimonies::findOrFail($id);
        return view('admin.testimonies.edit_testimonies',compact('testimony'));
    }// End Method

    public function UpdateTestimony(Request $request)
    {
        $request->validate([
            'testimonies_name'=>'required',
            'testimonies_url'=>'required|url',
            'testimonies_description'=>'required'
        ]);

        $testimony_id = $request->id;

        Testimonies::findOrFail($testimony_id)->update([
            'testimonies_name' => $request->testimonies_name,
            'testimonies_url' => $request->testimonies_url,
            'testimonies_description' => $request->testimonies_description,

        ]);
        $notification = array(
            'message' => 'Testimony Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.testimonies')->with($notification);
//
    }

    public function DeleteTestimony($id){
        Testimonies::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Testimony  Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }// End Method
}
