<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\UserProfile;

class UserProfileController extends Controller
{
    public function update(Request $request)
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login')->with('error', 'You need to be logged in.');
    }

    $request->validate([
        'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle profile picture upload
    if ($request->hasFile('profile_pic')) {
        // Check if the user already has a profile
        $userProfile = $user->profile;

        // Delete the old profile picture if it exists
        if ($userProfile && $userProfile->profile_pic) {
            Storage::delete($userProfile->profile_pic);
        }

        // Store the new profile picture
        $path = $request->file('profile_pic')->store('profile_pictures', 'public');

        // If profile doesn't exist, create it
        if (!$userProfile) {
            $userProfile = new UserProfile();
            $userProfile->user_id = $user->id;
        }

        $userProfile->profile_pic = $path;
        $userProfile->save();
    }

    return redirect()->back()->with('success', 'Profile picture updated successfully!');
}

}
