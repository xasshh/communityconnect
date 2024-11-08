<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        // Get all the necessary models
        $blogs = Blog::latest()->get();
        $testimonials = Testimonial::all();
        $userCount = User::count();
        $totalEvents = Event::count();
        $user = Auth::user();

        // Fetch all categories for the dropdown filter
        $categories = Category::all();

        // Initialize query to fetch events based on filters
        $query = Event::with('user'); // Eager load user for each event

        // Search term
        $search = $request->input('search');
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%')
                  ->orWhere('location', 'like', '%' . $search . '%');
            });
        }

        // Filter by category if selected
        $categoryId = $request->input('category');
        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        // Execute the query and get the events
        $events = $query->get();

        // Pass variables to the view
        return view('welcome', compact('events', 'userCount', 'categories', 'testimonials', 'blogs', 'totalEvents', 'user'));
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
