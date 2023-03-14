<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $decoded = json_decode($request->getContent(), true);
        // $messageArr = [
        //     'name' => $decoded['name'],
        //     'email' => $decoded['email'],
        //     'message' => $decoded['message']
        // ];

        $decoded->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required'
        ]);

        Contact::create([
            'contact_name' => $decoded->name,
            'contact_email' => $decoded->email,
            'contact_message' => $decoded->message
        ]);

        return response('200');
    }
}
