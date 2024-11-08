<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\GetInvolved; // Assuming you have a model for the form submissions
use Illuminate\Support\Facades\Auth;

class GetInvolvedController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'availability' => 'required|string',
            'skills' => 'required|string',
            'event_id' => 'required|exists:events,id', // Ensure the event exists
        ]);

        $getInvolved = new GetInvolved(); // Assuming you have a GetInvolved model
        $getInvolved->name = $request->name;
        $getInvolved->email = $request->email;
        $getInvolved->phone = $request->phone;
        $getInvolved->availability = $request->availability;
        $getInvolved->skills = $request->skills;
        $getInvolved->event_id = $request->event_id; // Associate with the event
        $getInvolved->user_id = Auth::id(); // Associate with the logged-in user

        $getInvolved->save();

        return redirect()->back()->with('success', 'Your information has been submitted successfully!');
    }
}
