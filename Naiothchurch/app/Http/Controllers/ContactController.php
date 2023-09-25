<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class ContactController extends Controller
{



    public function StoreMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[A-Za-z\s]+$/|string|min:2|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:10,15',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.min' => 'The name must have at least :min characters.',
            'name.max' => 'The name may not be greater than :max characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Invalid email format.',
            'subject.required' => 'The subject field is required.',
            'subject.string' => 'The subject must be a string.',
            'subject.max' => 'The subject may not be greater than :max characters.',
            'phone.required' => 'The phone number field is required.',
            'phone.numeric' => 'The phone number must be numeric.',
            'phone.digits_between' => 'The phone number must be between :min and :max digits.',
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a string.',
            'message.min' => 'The message must have at least :min characters.',
        ]);

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }


    public function ContactMessage(){

        $contacts = Contact::latest()->get();
        return view('admin.contact.allcontact',compact('contacts'));

    } // end mehtod


    public function DeleteMessage($id){

        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Your Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end mehtod
}
