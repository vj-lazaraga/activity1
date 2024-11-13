<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showUsers($id)
    {
        $course = Course::with('users')->findOrFail($id);
        $course->users()->sync([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]); 
        return view('courses', ['course' => $course]);
    }
}

