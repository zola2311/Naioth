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
            'worships_name'=>'required',
            'worships_url'=>'required',
            'worships_description'=>'required'
        ]);

        // Extract the embedded YouTube link from the provided URL
        $embeddedLink = $this->getEmbeddedLink($request->worships_url);

        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }
        Worships::insert([
            'worships_name' => $request->worships_name,
            'worships_url' => $embeddedLink,
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
        $embeddedLink = $this->getEmbeddedLink($request->worships_url);

        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }

        Worships::findOrFail($worship_id)->update([
            'worships_name' => $request->worships_name,
            'worships_url' => $embeddedLink,
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
