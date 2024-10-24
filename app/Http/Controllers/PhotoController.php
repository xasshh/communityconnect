<?php

// app/Http/Controllers/PhotoController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Event;

class PhotoController extends Controller
{
    public function create()
    {
        return view('upload'); // Show the upload form
    }

    public function store(Request $request)
    {
        // Validate the image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('photos', 'public');

            // Save the image path to the database
            Photo::create([
                'image_path' => $imagePath,
            ]);

            return redirect()->route('photos.index')->with('success', 'Photo uploaded successfully!');
        }

        return back()->withErrors('Failed to upload image');
    }

    public function index()
    {
        // Get all the photos
        $photos = Photo::all();
        
        // Pass the photos to the view
        return view('photos.index', compact('photos'));
    }
}

