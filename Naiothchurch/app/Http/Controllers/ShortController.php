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
    }// End Method
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
    public function StoreShort(Request $request){
        $request->validate([
            'shorts_name'=>'required',
            'shorts_url'=>'required',
            'shorts_description'=>'required'

        ]);
        // Extract the embedded YouTube link from the provided URL
        $embeddedLink = $this->getEmbeddedLink($request->shorts_url);
        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }

        Shorts::insert([
            'shorts_name' => $request->shorts_name,
            'shorts_url' => $embeddedLink,
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
        $embeddedLink = $this->getEmbeddedLink($request->shorts_url);
        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }
        Shorts::findOrFail($short_id)->update([
            'shorts_name' => $request->shorts_name,
            'shorts_url' => $embeddedLink,
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
