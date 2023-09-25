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
    public function getEmbeddedLink($youtubeLink)
    {
        // Regular expression pattern to extract video ID
        $pattern = '/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/';
        preg_match($pattern, $youtubeLink, $matches);

        if (count($matches) >= 2) {
            // Extracted video ID
            $videoId = $matches[1];

            // Construct the embedded link without "https:"
            $embeddedLink = "//www.youtube.com/embed/{$videoId}";

            return $embeddedLink;
        }

        // Handle invalid YouTube link
        return null;
    }

    public function StoreTestimony(Request $request){
        $request->validate([
            'testimonies_name'=>'required',
            'testimonies_url'=>'required|url',
            'testimonies_description'=>'required'
        ]);
//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);
        // Extract the embedded YouTube link from the provided URL
        $embeddedLink = $this->getEmbeddedLink($request->testimonies_url);
        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }
        Testimonies::insert([
            'testimonies_name' => $request->testimonies_name,
            'testimonies_url' =>  $embeddedLink,
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
    public function EditTestimony($id){

        $testimony = Testimonies::findOrFail($id);
        return view('admin.testimonies.edit_testimonies',compact('testimony'));
    }// End Method
    public function UpdateTestimony(Request $request)
    {

        $testimony_id = $request->id;
        $embeddedLink = $this->getEmbeddedLink($request->others_url);
        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }
        Testimonies::findOrFail($testimony_id)->update([
            'testimonies_name' => $request->testimonies_name,
            'testimonies_url' => $embeddedLink,
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
