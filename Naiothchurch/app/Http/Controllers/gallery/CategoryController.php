<?php

namespace App\Http\Controllers\gallery;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    //
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        //$test=dd($request);
        $request->validate([
            'name' => 'required',
            'category_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ],[
            'name.required' => 'The name field is required.',
            'name.alpha' => 'The name field should only contain alphabetic characters.',
            'description.required' =>'category description required',
            'category_image.required' => 'Please select an image.',
            'category_image.image' => 'The file must be an image.',
            'category_image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
            'category_image.max' => 'The maximum file size allowed is 2MB.',
        ]);

        $category_image = $request->file('category_image');

        $name_gen = hexdec(uniqid()).'.'.$category_image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($category_image)->resize(800,600)->save('upload/categories/'.$name_gen);
        $save_url = 'upload/categories/'.$name_gen;

        Category::insert([
            'name' => $request->name,
            'description' => $request->description,
            'category_image' =>  $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('categories.index')->with($notification);


    }

    public function index()
    {
        $categories = Category::with('galleries')->get();

        return view('admin.categories.index', compact('categories'));

    }
    public function EditCategory($id){

        $category = Category::findOrFail($id);
        return view('admin.categories.edit_category',compact('category'));
    }// End Method


    public function UpdateCategory(Request $request){
        $request->validate([
            'name' => 'required',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ],[
            'name.required' => 'The name field is required.',
            'name.alpha' => 'The name field should only contain alphabetic characters.',
            'description.required' =>'Category description required.',
            'category_image.image' => 'The file must be an image.',
            'category_image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
            'category_image.max' => 'The maximum file size allowed is 2MB.',
        ]);

        $category_id = $request->id;

        if ($request->file('category_image')) {
            $image = $request->file('category_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(800,600)->save('upload/categories/'.$name_gen);
            $save_url = 'upload/categories/'.$name_gen;

            Category::findOrFail($category_id)->update([

                'name' => $request->name,
                'description' => $request->description,
                'category_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Category Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('categories.index')->with($notification);

        } else{

            Category::findOrFail($category_id)->update([
                'name' => $request->name,
                'description' => $request->description,



            ]);
            $notification = array(
                'message' => 'Category Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('categories.index')->with($notification);

        } // end Else

    } // End Method


    public function DeleteCategory($id){

        $categories = Category::findOrFail($id);
        $img = $categories->category_image;
        unlink($img);

        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method

}
