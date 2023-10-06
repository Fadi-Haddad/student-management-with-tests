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

    public function createNewUser(Request $request){
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
}
