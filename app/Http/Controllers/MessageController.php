<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Notifications\UserMessage;
use Auth;

class MessageController extends Controller
{
    // Show the message form
    public function index()
    {
        
        // Assuming you want to list all users to send messages to
        $users = User::all();
        return view('messages.index', compact('users'));
    }

    // Handle message submission and notify the user
    public function send(Request $request)
    {
        
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'message' => 'required|string|max:1000',
        ]);

        $recipient = User::find($request->recipient_id);
        $message = $request->message;

        // Send notification
        $recipient->notify(new UserMessage($message, Auth::user()));

        return back()->with('success', 'Message sent successfully!');
    }
     public function reply(Request $request, $messageId)
   {
      $request->validate([
          'message' => 'required|string',
     ]);

      // Find the original message
      $parentMessage = Message::findOrFail($messageId);

//     // Create a new reply message
       $reply = new Message();
       $reply->message = $request->input('message');
       $reply->sender_id = auth()->id(); // Assuming you're using auth for user sessions
       $reply->recipient_id = $parentMessage->sender_id; // Send reply to the original sender
       $reply->parent_id = $parentMessage->id; // Link to the parent message
       $reply->save();

      return redirect()->back()->with('success', 'Your reply has been sent!');
  }
 
  public function search(Request $request)
  {
      $query = $request->input('query');
      $users = User::where('name', 'LIKE', "%{$query}%")->get();
  
      return response()->json($users);
  }

}
