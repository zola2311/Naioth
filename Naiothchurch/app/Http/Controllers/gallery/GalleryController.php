<?php

namespace App\Http\Controllers\gallery;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        return view('admin.galleries.create', compact('categories'));
    }

//

    public function StoreMultiImage(Request $request){
        $request->validate([

            'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $image = $request->file('images');

        foreach ($image as $multi_image) {

            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($multi_image)->resize(220,220)->save('upload/images/'.$name_gen);
            $save_url = 'upload/images/'.$name_gen;

            Gallery::insert([
                'images' => $save_url,
                'category_id' => $request->category_id,
                'created_at' => Carbon::now()

            ]);

        } // End of the froeach


        $notification = array(
            'message' => 'Image Inserted Successfully',
            'alert-type' => 'success'
        );

        //return redirect()->route('all.multi.image')->with($notification);
        return redirect()->back()->with($notification);

    }// End Method

    public function AllImages(){

        $allImages = Gallery::all();
        return view('admin.galleries.index',compact('allImages'));

    }// End Method

    public function EditImage($id){

        $editableImage = Gallery::findOrFail($id);
        return view('admin.galleries.edit_image',compact('editableImage'));

    }// End Method

    public function UpdateImage(Request $request){
        $multi_image_id = $request->id;
        if ($request->file('images')) {
            $image = $request->file('images');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(220,220)->save('upload/images/'.$name_gen);
            $save_url = 'upload/images/'.$name_gen;

            Gallery::findOrFail($multi_image_id)->update([
                'images' => $save_url,
            ]);

            $notification = array(
                'message' => 'Image Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.images')->with($notification);

        }

    }// End Method


    public function DeleteImage($id){

        $multi = Gallery::findOrFail($id);
        $img = $multi->images;
        unlink($img);

        Gallery::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Multi Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);



    }// End Method

}
