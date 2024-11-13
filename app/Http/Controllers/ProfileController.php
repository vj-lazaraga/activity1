<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showAllProfiles()
    {
        $profiles = Profile::with('user')->get(); 
        return view('profiles', compact('profiles'));
    }
}

