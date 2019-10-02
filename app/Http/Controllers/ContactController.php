<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact.contact');
    }

    public function sendMessage(){
        return view('contact.send_message');
    }
}
