<?php

use App\Notifications\UserMessage;
use App\Models\User;


class UserMessageController extends Controller
{
    
public function sendMessage(Request $request, $recipientId)
{
    $recipient = User::findOrFail($recipientId);
    $sender = auth()->user();

    $recipient->notify(new UserMessage($request->message, $sender));

    return back()->with('success', 'Message sent successfully.');
}
}