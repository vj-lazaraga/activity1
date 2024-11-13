<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}'s Courses</title> 
</head>
<body>
    <h1>{{ $user->name }}'s Courses</h1>
    @if ($user->courses->isNotEmpty()) 
        <h2>Enrolled Courses:</h2>
        <ul>
            @foreach ($user->courses as $course) 
                <li>{{ $course->name }}</li> 
            @endforeach
        </ul>
    @else
        <p>This user is not enrolled in any courses.</p>
    @endif
</body>
</html>
