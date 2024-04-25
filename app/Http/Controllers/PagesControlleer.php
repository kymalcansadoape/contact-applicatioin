<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PagesControlleer extends Controller
{

    public function thankyou(){
        return view('thankyou');
    }
    public function addContact(){
        return view('add-contact');
    }

    public function edit(Contact $contact){
        return view('edit-contact', ['contact' => $contact]);
    }
}
