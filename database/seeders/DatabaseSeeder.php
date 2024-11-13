<?php

namespace Database\Seeders;
use App\Models\Profile;
use App\Models\Course;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create users, profiles, and courses
        $users = User::factory(10)->create();

        // Create profiles for each user
        $users->each(function ($user) {
            Profile::factory()->create(['user_id' => $user->id]);
        });

        // Create courses
        Course::factory(5)->create();

        // Attach users to courses
        $courses = Course::all();
        $users->each(function ($user) use ($courses) {
            $user->courses()->attach($courses->random(2)); // Assign random courses
        });
    }
}