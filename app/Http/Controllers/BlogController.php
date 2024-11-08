<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Store blog post image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        // Store profile picture
        $profilePicPath = null;
        if ($request->hasFile('profile_pic')) {
            $profilePicPath = $request->file('profile_pic')->store('profile_pics', 'public');
        }
    
        Blog::create([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'image_path' => $imagePath,
            'profile_pic' => $profilePicPath,
            'user_id' => Auth::id(), // Associate with logged-in user
        ]);
    
        return redirect()->back()->with('success', 'Blog post created successfully.');
    }
    
}
