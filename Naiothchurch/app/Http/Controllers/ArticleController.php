<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{
    public function create()
    {
        return view('admin.articles.create_articles');
    }

    public function StoreArticle(Request $request){
        $request->validate([
            'articles_description'=>'required',
            'article_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'articles_detail'=>'required',
            'articles_title'=>'required'
        ],
//            ['article_image.required' => 'Please select an image.',
//                'article_image.image' => 'The file must be an image.',
//                'article_image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.']
        );

        $article_image = $request->file('article_image');
        if($article_image){
        $name_gen = hexdec(uniqid()).'.'.$article_image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($article_image)->resize(800,600)->save('upload/articles/'.$name_gen);
        $save_url = 'upload/articles/'.$name_gen;

        Articles::insert([
            'articles_detail' => $request->articles_detail,
            'articles_title' => $request->articles_title,
            'article_image' =>  $save_url,
            'articles_description' => $request->articles_description,

        ]);
        }
        Articles::insert([
            'articles_detail' => $request->articles_detail,
            'articles_title' => $request->articles_title,
            'articles_description' => $request->articles_description,

        ]);
        $notification = array(
            'message' => 'Article Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.articles')->with($notification);
    } // End Method

    public function AllArticles()
    {
        $articles = Articles::all();
        return view('admin.articles.index_articles', compact('articles'));
    }// End Method

    public function EditArticle($id){

        $article = Articles::findOrFail($id);
        return view('admin.articles.edit_articles',compact('article'));
    }// End Method

    public function UpdateArticle(Request $request)
    {
        $request->validate([
            'articles_description' => 'required',
            'article_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'articles_detail' => 'required',
            'articles_title' => 'required'
        ],
            [
                'article_image.image' => 'The file must be an image.',
                'article_image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.'
            ]);

        $article_id = $request->id;
        $article = Articles::findOrFail($article_id);

        if ($request->file('article_image')) {
            // Handle image update
            $image = $request->file('article_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // Generate a new image name
            Image::make($image)->resize(800, 600)->save('upload/articles/' . $name_gen);
            $save_url = 'upload/articles/' . $name_gen;

            // Update with image
            $article->update([
                'articles_detail' => $request->articles_detail,
                'articles_title' => $request->articles_title,
                'articles_description' => $request->articles_description,
                'article_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Article Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.articles')->with($notification);
        } else {
            // Update without changing the image
            $article->update([
                'articles_detail' => $request->articles_detail,
                'articles_title' => $request->articles_title,
                'articles_description' => $request->articles_description,
            ]);

            $notification = array(
                'message' => 'Article Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.articles')->with($notification);
        }
    }

    public function DeleteArticle($id){
        Articles::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Article  Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }// End Method

}
