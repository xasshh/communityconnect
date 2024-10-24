<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\InvolvementResponse;

class InvolvementController extends Controller
{
    
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'availability' => 'required',
            'skills' => 'required',
        ]);

        // Create a new InvolvementResponse model instance
        $response = new InvolvementResponseController();

        // Fill the model with the form data
        $response->name = $request->input('name');
        $response->email = $request->input('email');
        $response->phone = $request->input('phone');
        $response->availability = $request->input('availability');
        $response->skill = $request->input('skill');

        // Save the model to the database
        $response->save();

        // Return a JSON response to the AJAX request
        return response()->json(['success' => true]);
    }
}
