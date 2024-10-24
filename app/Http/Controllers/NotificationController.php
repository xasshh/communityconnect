<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function destroy($id)
{
    $notification = Auth::user()->notifications()->findOrFail($id);
    $notification->delete();

    return redirect()->back()->with('success', 'Notification deleted successfully.');
}
}
