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
}
