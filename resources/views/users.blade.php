<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}'s Courses</title> <!-- Display user's name in the title -->
</head>
<body>
    <h1>{{ $user->name }}'s Courses</h1> <!-- Display user's name -->
    @if ($user->courses->isNotEmpty()) <!-- Check if user has courses -->
        <h2>Enrolled Courses:</h2>
        <ul>
            @foreach ($user->courses as $course) <!-- Loop through user's courses -->
                <li>{{ $course->name }}</li> <!-- Display each course name -->
            @endforeach
        </ul>
    @else
        <p>This user is not enrolled in any courses.</p> <!-- Message when no courses -->
    @endif
</body>
</html>
