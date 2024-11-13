<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User Profiles</title>
</head>
<body>
    <h1>All User Profiles</h1>

    <ul>
        @foreach($profiles as $profile)
            <li>
                <strong>Name:</strong> {{ $profile->user->name }} <br>
                <strong>Email:</strong> {{ $profile->user->email }} <br>

                <!-- Display Courses -->
                <strong>Courses:</strong>
                @if($profile->user->courses->isNotEmpty())
                    <ul>
                        @foreach($profile->user->courses as $course)
                            <li>{{ $course->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No courses enrolled.</p>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
