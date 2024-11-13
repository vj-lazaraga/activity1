<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}'s Profile</title>
</head>
<body>
    <h1>{{ $user->name }}'s Profile</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Bio: {{ $user->profile->bio ?? 'N/A' }}</p>
    <p>School: {{ $user->profile->school ?? 'N/A' }}</p>

    <h3>Courses</h3>
    <ul>
        @foreach($user->courses as $course)
            <li>{{ $course->name }}</li>
        @endforeach
    </ul>
</body>
</html>
