<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'comment' => 'required|string',
        ]);

        // Process the form data (e.g., save to database or send an email)
        return back()->with('success', 'Your message has been sent successfully!');
    }
}