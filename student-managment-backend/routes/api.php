<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/courses', [CourseController::class, 'getAllCourses']);
Route::get('/create-new-course', [CourseController::class, 'createNewCourse']);
Route::get('/courses/{id}', [CourseController::class, 'getCourseByID']);
Route::delete('/courses/{id}', [CourseController::class, 'deleteCourseByID']);


Route::get('/students', [StudentController::class, 'getAllStudents']);
Route::get('/create-new-student', [StudentController::class, 'createNewStudent']);
Route::get('/students/{id}', [StudentController::class, 'getStudentByID']);
Route::delete('/students/{id}', [StudentController::class, 'deleteStudentByID']);
