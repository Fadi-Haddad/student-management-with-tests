<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function getAllCourses() {
        $courses = Course::all();

        return response()->json(['Courses'=>$courses]);

    }

    public function createNewCourse (Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'steps' => 'required|string',
        ]);

        $course = new Course;
        $course->name = $validatedData['name'];
        $course->description = $validatedData['description'];
        $course->steps = $validatedData['steps'];
        $course->save();

        return response()->json(['message' => 'Course Created Successfully']);

    }

    public function getCourseByID($id) {
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course Not Found'], 404);
        }

        return response()->json(['course'=>$course]);
    }

    public function deleteCourseByID($id) {
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $course->delete();

        return response()->json(['message'=>'Course Deleted Successfully']);
    }

}
