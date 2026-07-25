<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'website' => 'required|url',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $website = $validated['website'];
        $email = $validated['email'];
        $phone = $validated['phone'];

        // Send email to owner
        Mail::raw(
            "You have received a new leak report request.\n\nWebsite: {$website}\nEmail: {$email}\nPhone: {$phone}",
            function ($message) use ($email, $website) {
                $message->to('hello@deekod.com')
                        ->subject("New Lead Request: {$website}")
                        ->replyTo($email);
            }
        );

        // Send confirmation email to user
        Mail::raw(
            "Hi there,\n\nThanks for reaching out! We have received your request for a leak report for {$website}.\n\nEhtisham will review your site and reply with a 2-minute video showing exactly what's costing you patients shortly.\n\nBest,\nDeekod Team",
            function ($message) use ($email) {
                $message->to($email)
                        ->subject('Your Deekod Leak Report Request');
            }
        );

        return response()->json(['success' => true]);
    }
}
