<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    // Method to show the Discover page
    public function index()
    {
        // Fetch data for the Discover page (e.g., local businesses, landmarks, etc.)
        // This is a placeholder for now; you can fetch real data from the database later
        $places = [
            ['name' => 'Local Park', 'description' => 'A beautiful park with lots of greenery and space for activities.', 'type' => 'Park'],
            ['name' => 'Community Library', 'description' => 'A public library offering a wide range of books and resources.', 'type' => 'Library'],
            ['name' => 'Farmers Market', 'description' => 'A weekly market offering fresh produce and local crafts.', 'type' => 'Market'],
            ['name' => 'Art Gallery', 'description' => 'A gallery showcasing the works of local artists.', 'type' => 'Art'],
        ];

        return view('discover.index', compact('places'));
    }
}
