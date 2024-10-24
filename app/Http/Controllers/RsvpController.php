<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;
use App\Models\Reservation; 
use Illuminate\Support\Facades\Auth;

class RsvpController extends Controller
{
    public function create(Request $request)
    {

        // Retrieve the space being RSVP'd for
        $space = $request->query('space');
        $reservedSpaces = Reservation::pluck('space')->toArray();
        
        // Define all spaces (hardcoded, or ideally retrieved from a database)
        $spaces = [
            ['name' => 'Community Hall', 'slug' => 'community-hall', 'capacity' => 200, 'location'=>'Maitama','card'=>'A spacious community hall','price' => 500, 'image' => 'images/community-hall.jpg'],
            ['name' => 'Conference Room', 'slug' => 'conference-room', 'capacity' => 100,'location'=>'Apo', 'card'=>'A convinient conference room', 'price' => 150, 'image' => 'images/conference hall.jpg'],
            ['name' => 'Auditorium', 'slug' => 'Auditorium', 'capacity' => 1000,'location'=>'Garki', 'card'=>'An auditorium for large events','price' => 1.5, 'image' => 'images/auditorium.jpg'],
            ['name' => 'Cold Room', 'slug' => 'Cold room', 'capacity' => 50, 'location'=>'karu','card'=>'A small room for small scale events','price' => 200, 'image' => 'images/cold room.jpg'],
            ['name' => 'Dafone event center', 'slug' => 'Dafone event ', 'capacity' => 200, 'location'=>'lokogoma','card'=>'An event room for small occasion ','price' => 300, 'image' => 'images/dafone event center.jpeg'],
            ['name' => 'Abuja-event-center', 'slug' => 'Abuja-event-center ', 'capacity' => 400, 'location'=>'Abuja city center ','card'=>'An event room weddings ','price' => 300, 'image' => 'images/lekki-event-center.jpeg'],
        ];

        // Filter spaces to only show those that are available
        $availableSpaces = array_filter($spaces, function ($space) use ($reservedSpaces) {
            return !in_array($space['slug'], $reservedSpaces);
        });

        // Pass the space to the view for form display
        return view('rsvp.create', compact('space','availableSpaces'));
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'space' => 'required|string',
        ]);

       // Check if the space is already reserved
       $existingReservation = Reservation::where('space', $request->space)
       ->where('date', $request->date)
       ->first();

if ($existingReservation) {
return redirect()->back()->withErrors('This space has already been reserved for the selected date.');
}

    
    Reservation::create([
            'user_id' => auth()->user()->id,
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'date' => $validatedData['date'],
            'space' => $validatedData['space'],
        ]);
    
        return redirect()->back()->with('success', 'Your RSVP has been submitted.');
    }
    public function cancel($id)
    {
        // Find the reservation using the unique identifier
        $reservation = Reservation::findOrFail($id);
    
        // Delete the reservation
        $reservation->delete();
    
        return redirect()->route('dashboard')->with('success', 'Your reservation has been cancelled.');
    }
    
   
    public function edit($id)
{
    
    $reservation = Reservation::where('id', $id)->firstOrFail();

    return view('rsvp.Edit', compact('reservation'));
}

public function update(Request $request, $id)
{
    // Validate the input
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'date' => 'required|date',
    ]);

    // Find the reservation by ID and update it with validated data
    Reservation::findOrFail($id)->update($request->only(['name', 'email', 'date']));

    // Redirect back with a success message
    return Redirect::route('rsvp.Edit', $id)->with('status', 'RSVP updated successfully');
}


}
