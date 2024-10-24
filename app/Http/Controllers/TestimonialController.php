<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        // Fetch existing testimonials (optional)
       
        return view('testimonial.create');
    }
    public function store(Request $request)
{
    // Validate incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'testimonial' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handle uploaded testimonial image
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('testimonials', 'public');
    }

    // Store the profile picture of the authenticated user in the testimonial
    $profilePic = Auth::user()->profile_pic ?? null;

    // Create a new testimonial
    Testimonial::create([
        'name' => $request->name,
        'testimonial' => $request->testimonial,
        'image_path' => $imagePath,  // Optional image uploaded with the testimonial
        'profile_pic' => $profilePic,  // User's profile picture
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Your testimonial has been submitted.');
}
}