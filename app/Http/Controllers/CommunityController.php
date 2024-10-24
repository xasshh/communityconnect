<?php



namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Category;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        $events = Event::all();
        // Home page logic here
        $categories = Category::all();
        
        return view('events.index',compact('events','categories')) ;
    }

    public function join()
    {
        // Join page logic here
        return view('join');
    }

    public function welcome()
    {
        // Join page logic here
        return view('welcome');
    }

    public function events()
    {
        // Events page logic here
        $events = [
            ['title' => 'Community Clean-Up', 'date' => '2024-09-15', 'location' => 'Local Park, 123 Main St'],
            ['title' => 'Art in the Park', 'date' => '2024-09-20', 'location' => 'Downtown Park, 456 Park Ave'],
            // Add more events here
        ];
        return view('events.index', compact('events'));
    }

    public function discover()
    {
        // Discover page logic here
        return view('discover.index');
    }
    public function profile()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Fetch events that the user has RSVP'd to
        $userEvents = Event::whereHas('rsvps', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        // Pass the user and their events to the view
        return view('community.profile', compact('user', 'userEvents'));
    }

    public function showSpot($id) {
        $spot = Spot::findOrFail($id);
        return view('community.spot', compact('spot'));
    }
    
    public function showLeader($id) {
        $leader = Leader::findOrFail($id);
        return view('community.leader', compact('leader'));
    }
    
}

