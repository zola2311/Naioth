<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Member;
use App\Models\Testimonies;
use App\Models\Worships;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front_end.index');
    }

    public function about()
    {
        return view('front_end.about_menu.about');
    }

    public function gallery()
    {
        $categories = Category::with('galleries')->get();

//        return view('admin.categories.index', compact('categories'));
        return view('front_end.gallery_categories', compact('categories'));
//        return view('front_end.gallery_categories');
    }

    public function believe()
    {
        return view('front_end.about_menu.believe');
    }

    public function members()
    {

        $members = Member::latest()->get();
        return view('front_end.about_menu.members',compact('members'));
    }

    public function testimonies()
    {
        $testimonies = Testimonies::latest()->get();
        return view('front_end.resources_menu.testimonies',compact('testimonies'));
    }
    public function worships()
    {
        $worships = Worships::latest()->get();
        return view('front_end.worships',compact('worships'));
    }

    public function articles()
    {
        return view('front_end.resources_menu.teachings.articles');
    }

    public function others()
    {
        return view('front_end.resources_menu.teachings.others');
    }

    public function series()
    {
        return view('front_end.resources_menu.teachings.series');
    }

    public function sermons()
    {
        return view('front_end.resources_menu.teachings.sermons');
    }

    public function shorts()
    {
        return view('front_end.resources_menu.teachings.short');
    }

    public function events()
    {
        return view('front_end.resources_menu.events');
    }

    public function prayers()
    {
        return view('front_end.resources_menu.prayers');
    }

    public function contact()
    {
        return view('front_end.contact');
    }
    public function category($category_id){

        $category = Category::where('id', $category_id)->get();

        return view('front_end.gallery',compact('category'));
    }
}
