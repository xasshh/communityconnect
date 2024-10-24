<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    
    // Store a new thread
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'forum_id' => 'required|exists:forums,id', // Ensure the forum exists
        ]);

        // Create the new thread
        Thread::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->id(), // Assuming the user is logged in
            'forum_id' => $request->forum_id,
        ]);

        // Redirect back to the forum page
        return redirect()->route('forums.show', $request->forum_id)->with('success', 'Thread created successfully!');
    }

    // Show a single thread
    public function show($id)
    {
        
    $thread = Thread::with('user', 'replies.user')->findOrFail($id);
        return view('threads.show', compact('thread'));
    }


    // Show the form to edit the thread
    public function edit($id)
    {
        $thread = Thread::findOrFail($id);

        // Ensure only the thread owner can edit the thread
        if ($thread->user_id !== auth()->id()) {
            return redirect()->route('threads.show', $thread->id)->with('error', 'You are not authorized to edit this thread.');
        }

        return view('threads.edit', compact('thread'));
    }

    // Handle the update of the thread
    public function update(Request $request, $id)
    {
        $thread = Thread::findOrFail($id);

        // Ensure only the thread owner can update the thread
        if ($thread->user_id !== auth()->id()) {
            return redirect()->route('forums', $thread->id)->with('error', 'You are not authorized to update this thread.');
        }

        // Validate the updated data
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Update the thread
        $thread->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('forums.index', $thread->id)->with('success', 'Thread updated successfully!');
    }

    public function destroy($id)
    {
        $thread = Thread::findOrFail($id);

        // Ensure only the thread owner can delete the thread
        if ($thread->user_id !== auth()->id()) {
            return redirect()->route('threads.show', $thread->id)->with('error', 'You are not authorized to delete this thread.');
        }

        // Delete the thread
        $thread->delete();

        return redirect()->route('forums.show', $thread->forum_id)->with('success', 'Thread deleted successfully!');
    }
}
