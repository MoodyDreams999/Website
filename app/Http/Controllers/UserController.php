<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // User dashboard view
        return view('user.dashboard');
    }

    public function profile()
    {
        // View or edit user profile
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        // Update user profile
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
    }

    public function interactWithContent($id)
    {
        // Logic to interact with content (like, comment, etc.)
    }
}
