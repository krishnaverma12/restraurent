<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
   public function contact(Request $req){
    $con = new contact;
    $con->name =$req->name;
    $con->email =$req->email;
    $con->subject =$req->subject;
    $con->message =$req->message;
    $con->save();
    return redirect()->route('home')->with('status','thank you to contact');
   }
}
