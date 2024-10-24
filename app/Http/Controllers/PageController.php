<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function join()
    {
        // Logic for join page
        return view('join'); // Assuming you have a view named 'join'
    }

    public function events()
    {
        // Logic for events page
        return view('events'); // Assuming you have a view named 'events'
    }

    public function discover()
    {
        // Logic for discover page
        return view('discover'); // Assuming you have a view named 'discover'
    }
}
