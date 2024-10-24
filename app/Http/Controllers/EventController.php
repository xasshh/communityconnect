<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve all categories for the dropdown
        $categories = Category::all();

        // Start building the query for events
        $query = Event::query();
    
        // Search filtering
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%')
                  ->orWhere('location', 'like', '%' . $search . '%');
            });
        }
    
        // Category filtering
        if ($request->has('category') && $request->category != '') {
            $category = $request->category;
            $query->whereHas('category', function($q) use ($category) {
                $q->where('name', $category);
            });
        }
    
        // Retrieve the filtered events
        $events = $query->get();
    
        // Pass the filtered events and categories to the view
        return view('events.index', compact('events', 'categories'));
    }
    

    // Method to fetch events for real-time filtering (used by AJAX)
    public function fetchEvents(Request $request)
    {
        $query = Event::query();
    
        // Apply filters if provided
        if ($request->has('name')) {
            $query->where('title', 'like', '%' . $request->name . '%');  // Assuming 'title' is used instead of 'name'
        }
    
        if ($request->has('date')) {
            // Filter by date only, ignoring the time part
            $query->whereDate('time', $request->date);
        }
    
        if ($request->has('time')) {
            // Filter by both date and time
            $query->whereTime('time', $request->time);
        }
    
        // Get filtered events
        $events = $query->get();
    
        return response()->json($events);
    }
    

    
    public function store(Request $request)
{

    $request->validate([
       'title' => 'required|string|max:255',
       'description' => 'required|string',
       'location' => 'required|string',
       'event_datetime' => 'required|date',
       'category_id' => 'required|exists:categories,id',
       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    // $imagePath = null;
  
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
    }

    Event::firstOrCreate(
        [
            'title' => $request->title,
            'event_datetime' => $request->event_datetime
        ],
        [
            'description' => $request->description,
            'location' => $request->location,
            'category_id' => $request->category_id,
            'image_path' => $imagePath,
        ]
    );
    return redirect()->route('events.index')->with('success', 'Event created successfully.');
}
    public function createe(Request $request)
{

    return view('events.createe');
}


// EventController.php


public function joinEvent(Request $request)
{
    // Ensure user is logged in

    $user = Auth::user();
    
    if (!$user) {
        return redirect()->route('login')->with('error', 'You must be logged in to join an event.');
    }

    $eventId = $request->input('event_id');
    
    // if ($joinedEvents->users()->where('user_id', $user->events)->exists()) {

    //     return redirect()->back()->with('error', 'You have already joined this event.');
    // }

    // Attach the event to the user if not already joined
    if ($user->events()->where('event_id', $eventId)->doesntExist()) {
        $user->events()->attach($eventId);
    }

    return redirect()->back()->with('success_event', $eventId);
}



 public function sub(Request $request)
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
