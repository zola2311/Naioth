<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Others;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function create()
    {
        return view('admin.others.create_others');
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

    public function store(Request $request)
    {
        $request->validate([
            'others_name'=>'required',
            'others_url'=>'required',
            'others_description'=>'required'

        ]);
        // Extract the embedded YouTube link from the provided URL
        $embeddedLink = $this->getEmbeddedLink($request->others_url);

        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }
        Others::insert([
            'others_name' => $request->others_name,
            'others_url' => $embeddedLink,
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
        $embeddedLink = $this->getEmbeddedLink($request->others_url);

        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }
        Others::findOrFail($other_id)->update([
            'others_name' => $request->others_name,
            'others_url' => $embeddedLink,
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
