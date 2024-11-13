<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show a specific user's profile
    public function showProfile($id)
    {
        $user = User::with('profile', 'courses')->findOrFail($id); // Eager load profile and courses
        return view('profile', compact('user'));
    }

    // Show all courses for a user
    public function showUserCourses($id)
    {
        $user = User::with('courses')->findOrFail($id); // Fetch the user and their courses
        $user->courses()->sync([1, 2, 3, 4, 5]);
        return view('users', ['user' => $user]); // Pass the user with their courses to the view
    }
}