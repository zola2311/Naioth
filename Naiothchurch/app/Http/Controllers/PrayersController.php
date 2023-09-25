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




    public function storePrayer(Request $request)
    {
        $request->validate([
            'prayers_name' => 'required',
            'prayers_url' => 'required|url', // Ensure the URL is valid
            'prayers_description' => 'required',
        ]);

        // Extract the embedded YouTube link from the provided URL
        $embeddedLink = $this->getEmbeddedLink($request->prayers_url);

        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }

        Prayers::insert([
            'prayers_name' => $request->prayers_name,
            'prayers_url' => $embeddedLink, // Store the embedded link
            'prayers_description' => $request->prayers_description,
        ]);

        $notification = array(
            'message' => 'Prayer Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.prayers')->with($notification);
    }



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
        $embeddedLink = $this->getEmbeddedLink($request->prayers_url);

        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }

        Prayers::findOrFail($prayer_id)->update([
            'prayers_name' => $request->prayers_name,
            'prayers_url' => $embeddedLink,
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
