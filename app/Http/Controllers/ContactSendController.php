<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Events\ContactFormSubmitted;

class ContactSendController extends Controller
{
    public function send(Request $request){

        $validateData = $request->validate([
            "sender_name"=> "required|max:255",
            "email"=> "required",
            "message" => "required",
        ]);
        event(new ContactFormSubmitted($validateData));

        Contact::create($validateData);

        return redirect("/#section_5")->with("success","Pesan telah terkirim");
    }
}
