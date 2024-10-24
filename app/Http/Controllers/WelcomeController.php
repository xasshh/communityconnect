<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve all events from the database
        $blogPosts = BlogPost::latest()->get(); // Fetch latest blog posts
    $testimonials = Testimonial::all();
        $events = Event::all();
        $userCount = User::count();
        $search = $request->input('search');

        // Query to fetch events based on the search term
        // if ($search) {
        //     $events = Event::where('title', 'like', '%' . $search . '%')
        //         ->orWhere('description', 'like', '%' . $search . '%')
        //         ->orWhere('location', 'like', '%' . $search . '%')
        //         ->get();
        // } else {
        //     $events = Event::all();
        // }
    $search = $request->input('search');
    $category = $request->input('category');

    // Query to search by title, description, location, or category
    $events = Event::query();
    $search = $request->input('search');
    $categoryId = $request->input('category'); // Correctly retrieving the category

    $query = Event::query();

    // Search by event title, description, or location
    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('title', 'like', '%' . $search . '%')
              ->orWhere('description', 'like', '%' . $search . '%')
              ->orWhere('location', 'like', '%' . $search . '%');
        });
    }

    // Filter by category if selected
    if ($categoryId) {
        $query->where('category_id', $categoryId);
    }

    // Get the filtered events
    $events = $query->get();

    // Get all categories for the search form dropdown
    $categories = Category::all(); // Make sure to retrieve categories

    // $events = $events->get();
    $totalEvents = Event::count();
        //  $events = $query->get();

        // Pass the $events variable to the view
        return view('welcome', compact('events','userCount','categories','testimonials','blogPosts','totalEvents'));
        
    }

    public function joinEvent(Request $request)
{
    // Ensure user is logged in
    $user = Auth::user();
    
    if (!$user) {
        return redirect()->route('login')->with('error', 'You must be logged in to join an event.');
    }

    $eventId = $request->input('event_id');
    
    // Attach the event to the user if not already joined
    if ($user->events()->where('event_id', $eventId)->doesntExist()) {
        $user->events()->attach($eventId);
    }

    return redirect()->back()->with('success', 'You have successfully joined the event!');
}

    
}
