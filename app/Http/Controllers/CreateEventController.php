<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateEventController extends Controller
{
    public function index(Request $request)
    {
        // $events = Event::create($request->all());
    
        $request->validate([
            'title' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imagePath = null;
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'image_path' => $imagePath,
        ]);
    
        return redirect()->route('events.index')->Alert('success', 'Event created successfully.');
    }
}
