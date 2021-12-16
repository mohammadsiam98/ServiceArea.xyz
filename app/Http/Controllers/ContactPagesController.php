<?php

namespace App\Http\Controllers;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class ContactPagesController extends Controller
{
    public function list()
    {
        $contactList = ContactForm::all();
        return view ('pages.contact.list',compact('contactList'));
    }

    public function store(Request $request)
    {
        $contact_form_data = request()->all();
        Mail::to('mohammadalaminsiam@gmail.com')->send(new ContactFormMail($contact_form_data));
        
        $this->validate($request,[
            'InputName' => 'required|string',
            'InputMessage' => 'required|string', 
            'InputSubject' => 'required|string',   
        ]);

        $contactList = new ContactForm;
        $contactList->InputName    =    $request->InputName;
        $contactList->InputMessage =    $request->InputMessage;
        $contactList->InputSubject =    $request->InputSubject;

        $contactList->save();
        return redirect()->route('home','/#contact_form')->with('success','Your Message has been successfully submitted');
    }

}
