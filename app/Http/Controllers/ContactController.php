<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'comment' => 'required|string',
        ]);

        // Send the email
        Mail::send('emails.contact', $validated, function ($message) use ($validated) {
            $message->to('your-email@example.com') // Replace with your email address
                    ->subject('New Contact Form Submission')
                    ->from($validated['email'], $validated['name']);
        });

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}