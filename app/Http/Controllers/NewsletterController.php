<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSubscription;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email address
        $request->validate([
            'email' => 'required|email',
        ]);
        $email = $request->input('email');

        // Optionally, send an email notification to admin
        Mail::raw("New subscription from: $email", function($message) use ($email) {
            $message->to('adeoyemeshack37@gmail.com')
                    ->subject('New Newsletter Subscription');
        });

        // Respond with a success message
        return response()->json(['success' => true]);

    }
}


