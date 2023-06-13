<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function create()
    {
        return view('admin.articles.create_articles');
    }


    public function StoreArticle(Request $request){

        $request->validate([
            'articles_description'=>'required',
            'articles_name'=>'required',
            'articles_url'=>'required'

        ]);

        Articles::insert([
            'articles_name' => $request->articles_name,
            'articles_url' => $request->articles_url,
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

    }
    public function EditArticle($id){

        $article = Articles::findOrFail($id);
        return view('admin.articles.edit_articles',compact('article'));
    }// End Method
    public function UpdateArticle(Request $request)
    {

        $article_id = $request->id;

        Articles::findOrFail($article_id)->update([
            'articles_name' => $request->articles_name,
            'articles_url' => $request->articles_url,
            'articles_description' => $request->articles_description,

        ]);
        $notification = array(
            'message' => 'Article Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.articles')->with($notification);
//
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
