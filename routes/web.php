<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Profile routes
Route::get('/profiles', [ProfileController::class, 'showAllProfiles']); // Show all profiles

// User-specific routes
Route::get('/user/{id}/profile', [UserController::class, 'showProfile']); // Show user's profile
Route::get('/user/{id}/courses', [UserController::class, 'showUserCourses']); // Show user's courses

// Course-specific routes
Route::get('/courses/{id}/users', [CourseController::class, 'showUsers'])->name('courses');; // Show all users in a course



