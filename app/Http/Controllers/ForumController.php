<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function create()
    {
        return view('forums.create');
    }

    // Store the new forum in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'name' => 'required|string|max:255'
        ]);

        // Create the forum
        Forum::create([
            'title' => $request->title,
            'description' => $request->description,
            'name' => $request->name,
        ]);

        // Redirect back to forums list with success message
        return redirect()->route('forums.create')->with('success', 'Forum created successfully!');
    }
    
    // Show the list of forums
    public function index()
    {
        // Fetch all forums
        $forums = Forum::all();

        $forums = Forum::withCount('comments') // Fetch forums with the count of comments
    ->with('creator') // Eager load the creator relationship
    ->latest() // Order by latest
    ->get();

        // Return the view with the forums
        return view('forums.index', compact('forums'));
    }

    // Show a specific forum and its threads
    public function show($id)
    {
        // Fetch the forum and its threads
        $forum = Forum::findOrFail($id);
        $threads = $forum->threads()->latest()->get();

        // Return the view with the forum and threads
        return view('forums.show', compact('forum', 'threads'));
    }

public function comments()
{
    return $this->hasMany(Comment::class);
}

}