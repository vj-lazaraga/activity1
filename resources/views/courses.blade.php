<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users in {{ $course->name }}</title>
</head>
<body>
    <h1>Users Enrolled in {{ $course->name }}</h1>
    <ul>
        @forelse ($course->users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @empty
            <p>No users enrolled in this course.</p>
        @endforelse
    </ul>
</body>
</html>
