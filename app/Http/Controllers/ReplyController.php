<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request, Thread $thread)
    {
        // Validate the request
        $request->validate([
            'content' => 'required|string',
        ]);

        // Create a new reply
        $reply = new Reply();
        $reply->content = $request->input('content');
        $reply->user_id = auth()->id(); // Assuming user is authenticated
        $reply->thread_id = $thread->id;
        $reply->save();

        // Redirect back to the thread with a success message
        return redirect()->route('threads.show', $thread->id)->with('success', 'Reply posted successfully!');
    }
}

