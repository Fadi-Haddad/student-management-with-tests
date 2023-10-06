<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentWebController extends Controller
{
    public function displayStudents(){

        $students = Student::all();

        return view('students.displayall', ['students' => $students]);
    }
}