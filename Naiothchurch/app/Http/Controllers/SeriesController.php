<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    //

    public function create()
    {
        return view('admin.series.create_series');
    }


    public function StoreSerie(Request $request){

//        $request->validate(['blog_category'=>'required'],['blog_category.required'=>'blog category name ግዴታ ነው',]);
        $request->validate([
            'series_name'=>'required',
            'series_url'=>'required',
            'series_description'=>'required'

        ]);
        Series::insert([
            'series_name' => $request->series_name,
            'series_url' => $request->series_url,
            'series_description' => $request->series_description,

        ]);

        $notification = array(
            'message' => 'Serie Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.series')->with($notification);


    } // End Method



    public function AllSeries()
    {
        $series = Series::all();

        return view('admin.series.index_series', compact('series'));

    }
    public function EditSerie($id){

        $serie = Series::findOrFail($id);
        return view('admin.series.edit_series',compact('serie'));
    }// End Method
    public function UpdateSerie(Request $request)
    {

        $serie_id = $request->id;

        Series::findOrFail($serie_id)->update([
            'series_name' => $request->series_name,
            'series_url' => $request->series_url,
            'series_description' => $request->series_description,

        ]);
        $notification = array(
            'message' => 'Serie Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.series')->with($notification);
//
    }


    public function DeleteSerie($id){


        Series::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Serie  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}

