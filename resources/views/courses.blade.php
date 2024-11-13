<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->course_name }}</title>
</head>
<body>
    <h1>{{ $course->course_name }}</h1>
    <p>{{ $course->description }}</p>
    <h2>Users enrolled:</h2>
    <ul>
        @forelse ($course->users as $user)
            <li>{{ $user->name }}</li>
        @empty
            <p>No users enrolled in this course.</p>
        @endforelse
    </ul>
</body>
</html>
