<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
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
