<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\InvolvementResponseController;
use App\Models\InvolvementResponse;


class InvolvementResponseController extends Controller
{
    public function save(Request $request)
    {
        $data = $request->all();
        // Validate the form data
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'availability' => 'required',
        //     'skill' => 'required',
        // ]);

        // Create a new InvolvementResponse model instance
        $response = new InvolvementResponse();

        // Fill the model with the form data
        $response->name = $request->input('name');
        $response->email = $request->input('email');
        $response->phone = $request->input('phone');
        $response->availability = $request->input('availability');
        $response->skill = $request->input('skill');
        // Save the model to the database
        $response->save();

        // Return a JSON response to the AJAX request
        return redirect()->back()->with(['message' => 'Data saved successfully']);
    }
}
