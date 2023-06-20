<?php

namespace App\Http\Controllers\gallery;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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


    public function StoreMultiImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'category_id.required' => 'Please choose a category.',
            'images.required' => 'Please select at least one image.',
            'images.array' => 'The images must be an array.',
            'images.*.image' => 'The file must be an image.',
            'images.*.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
            'images.*.max' => 'The maximum file size allowed is 2MB.',
        ]);


        if ($validator->fails() || $request->file('images') === null) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('images');

        foreach ($image as $multi_image) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_image->getClientOriginalExtension();
            Image::make($multi_image)->resize(220, 220)->save('upload/images/' . $name_gen);
            $save_url = 'upload/images/' . $name_gen;

            Gallery::insert([
                'images' => $save_url,
                'category_id' => $request->category_id,
                'created_at' => Carbon::now()
            ]);
        }

        $notification = [
            'message' => 'Image Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.images')->with($notification);
    }


        return redirect()->route('all.images')->with($notification);
    



    public function AllImages(){

        $allImages = Gallery::all();
        return view('admin.galleries.index',compact('allImages'));

    }// End Method

    public function EditImage($id){

        $editableImage = Gallery::findOrFail($id);
        return view('admin.galleries.edit_image',compact('editableImage'));

    }// End Method

    public function UpdateImage(Request $request){
        $validator = Validator::make($request->all(), [
            'images' => 'required',

        ], [

            'images.required' => 'Please select at least one image.',
            'images.image' => 'The file must be an image.',
            'images.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
            'images.max' => 'The maximum file size allowed is 2MB.',
        ]);

        if ($validator->fails() || $request->file('images') === null) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
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
    public function deletemultipleimages(Request $request)
    {
        $selectedImages = $request->input('selected_images');

        if (!empty($selectedImages)) {
            // Delete the selected images
            Gallery::whereIn('id', $selectedImages)->delete();

            $notification = array(
                'message' => 'Selected images deleted successfully.',
                'alert-type' => 'success'
            );

            return redirect()->route('all.images')->with($notification);
        } else {
            $notification = array(
                'message' => 'Please select at least one image to delete.',
                'alert-type' => 'warning'
            );

            return redirect()->back()->with($notification);
        }
    }

}
