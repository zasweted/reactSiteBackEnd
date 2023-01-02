<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'contact_name' => 'required',
            'contact_email' => ['required', 'email'],
            'contact_message' => 'required'
        ]);

        Contact::create([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_message' => $request->contact_message
        ]);

        return response('200');
    }
}
