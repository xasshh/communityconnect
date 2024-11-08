<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function follow(Request $request)
    {
        $userToFollow = User::findOrFail($request->user_id);
        $user = auth()->user();
    
        if ($user->following()->where('followed_user_id', $userToFollow->id)->exists()) {
            return redirect()->back()->with('error', 'You are already following this user.');
        }
    
        $user->following()->attach($userToFollow->id);
    
        return redirect()->back()->with('success', 'You are now following ' . $userToFollow->name);
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'LIKE', "%{$query}%")->get();
    
        return response()->json($users);
    }

}
