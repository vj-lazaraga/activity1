<?

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Show all users enrolled in a specific course
    public function showUsers($id)
    {
        // Retrieve the course and eager load its users
        $course = Course::with('users')->findOrFail($id); 

        // Return the view with the course and users data
        return view('courses', ['course' => $course]);
    }

    public function showUserCourses($id)
    {
        $user = User::with('courses')->findOrFail($id);
        return view('courses', ['user' => $user]);
    }
}

