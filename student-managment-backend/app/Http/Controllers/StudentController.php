<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAllStudents() {

        $students = Student::select('id', 'name', 'age')->get();

        return response()->json(['students'=>$students]);
    }

    public function createNewStudent(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
        ]);

        $student = new Student;
        $student->name = $validatedData['name'];
        $student->age = $validatedData['age'];
        $student.save();

        return response()->json(['message' => 'User Created Successfully']);

    }

    public function getStudentByID($id) {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        return response()->json(['student'=>$student]);
    }

    public function deleteStudentByID($id) {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $student->delete();

        return response()->json(['message'=>'Student Deleted Successfully']);
    }
}
