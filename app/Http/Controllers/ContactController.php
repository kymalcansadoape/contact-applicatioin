<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if (auth()->check()) {
            $contact = new Contact;
            $contact->fill($request->all());
            $contact->userId = auth()->id();
            $contact->save();
        }
        return redirect('/dashboard');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if (auth()->check()) {
            $contact = Contact::find($id);

            if ($contact) {
                $contact->fill($request->all());
                $contact->save();
            }
        }

        return redirect('/dashboard');
    }
}
