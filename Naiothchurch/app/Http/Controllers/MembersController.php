<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Intervention\Image\Facades\Image;

class MembersController extends Controller
{
    //
    public function create()
    {
        return view('admin.members.create_members');
    }

    public function store(Request $request)
    {

        //

        $request->validate([
            'name' => 'required|string|max:255|unique:members,name',
            'member_image' => 'required',
        ],[
            'name.required'=>'member name is required',
            'member_image.required' =>'member image required'
        ]);
        $member_image = $request->file('member_image');

        $name_gen = hexdec(uniqid()).'.'.$member_image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($member_image)->resize(1020,519)->save('upload/members/'.$name_gen);
        $save_url = 'upload/members/'.$name_gen;

        Member::insert([
            'name' => $request->name,
            'description' => $request->description,
            'member_image' =>  $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Member Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.members')->with($notification);


    }

    public function index()
    {
        $members = Member::all();

        return view('admin.members.index_members', compact('members'));

    }
    public function EditMember($id){

        $member = Member::findOrFail($id);
        return view('admin.members.edit_members',compact('member'));
    }// End Method


    public function UpdateMember(Request $request){

        $member_id = $request->id;

        if ($request->file('member_image')) {
            $image = $request->file('member_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('upload/members/'.$name_gen);
            $save_url = 'upload/members/'.$name_gen;

            Member::findOrFail($member_id)->update([

                'name' => $request->name,
                'description' => $request->description,
                'member_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Member Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.members')->with($notification);

        } else{

            Member::findOrFail($member_id)->update([
                'name' => $request->name,
                'description' => $request->description,



            ]);
            $notification = array(
                'message' => 'Member Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.members')->with($notification);

        } // end Else

    } // End Method


    public function DeleteMember($id){

        $members = Member::findOrFail($id);
        $img = $members->member_image;
        unlink($img);

        Member::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Member Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}
