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

    public function StoreSermon(Request $request){

//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);
        $request->validate([
            'sermons_name'=>'required',
            'sermons_url'=>'required',
            'sermons_description'=>'required'

        ]);
        // Extract the embedded YouTube link from the provided URL
        $embeddedLink = $this->getEmbeddedLink($request->sermons_url);
        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }
        Sermons::insert([
            'sermons_name' => $request->sermons_name,
            'sermons_url' => $embeddedLink,
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
        $embeddedLink = $this->getEmbeddedLink($request->sermons_url);
        if (!$embeddedLink) {
            // Handle invalid YouTube link
            $notification = array(
                'message' => 'Invalid YouTube link. Please provide a valid YouTube URL.',
                'alert-type' => 'error'
            );

            return redirect()->back()->withInput()->with($notification);
        }
        Sermons::findOrFail($sermon_id)->update([
            'sermons_name' => $request->sermons_name,
            'sermons_url' => $embeddedLink,
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


