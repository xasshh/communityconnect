<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rsvp;
use App\Models\Event;
use App\Models\User;
use App\Models\Reservation;


class DashboardController extends Controller
{
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // DashboardController.php
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();
        // Fetch the user's joined events using the relationship in the User model
        $joinedEvents = $user->events;
         // Assuming 'events' relationship is defined in User model
        // $userRsvps = $user->reservations;
        $userCount = User::count();

        $totalEvents = Event::count();
        // Fetch the user's RSVPs
        // $userRsvps = Reservation::where('id', $user->id)->with('user')->get();
          $reservations = Reservation::with('user')->get();
        //   $reservations = Reservation::where('id', $user->id)->get();

        //  $userRsvps = Reservation::with('user')->get(); // 'user' refers to the relationship with User model
    // Get all events created by the current user
         $createdEvents = $user->events()->with('users')->get(); // Also load users who joined
        // Pass both joinedEvents and userRsvps to the view
        return view('dashboard', compact('joinedEvents', 'createdEvents','reservations','userCount','totalEvents','user'));
    } 
}
