<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FollowController extends Controller
{
    public function follow(Request $request)
{
    $userToFollow = User::findOrFail($request->user_id);
    $follower = auth()->user();

    $follower->following()->attach($userToFollow->id);

    return back()->with('success', 'You are now following ' . $userToFollow->name);
}

public function unfollow(Request $request)
{
    $userToUnfollow = User::findOrFail($request->user_id);
    $follower = auth()->user();

    $follower->following()->detach($userToUnfollow->id);

    return back()->with('success', 'You have unfollowed ' . $userToUnfollow->name);
}
}
