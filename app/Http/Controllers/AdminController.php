<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;

class AdminController extends Controller
{
    public function index()
    {
        // Admin dashboard view
        return view('admin.dashboard');
    }

    public function manageUsers()
    {
        // List all users
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function editUser($id)
    {
        // Edit a user
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        // Update user details
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('admin.users.index');
    }

    public function deleteUser($id)
    {
        // Delete a user
        User::destroy($id);
        return redirect()->route('admin.users.index');
    }

    public function manageContent()
    {
        // Manage all content
        $articles = Article::all();
        return view('admin.content.index', compact('articles'));
    }
}

