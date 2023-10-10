<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Student;
use App\Models\Course;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_getAllStudents()
    {
        $response = $this->get('/api/students');

        $response->assertStatus(200);
        $response->assertJsonStructure(['students']);
    }

    public function test_createNewStudent()
    {
        $data = [
            'name' => 'New User',
            'age' => 40,
        ];

        $response = $this->post('/api/create-new-student', $data);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'User Created Successfully']);
    }

    public function test_getStudentByID()
    {

        $student = Student::factory()->create();

        $response = $this->get('/api/students/'.$student->id);

        $response->assertStatus(200);
        $response->assertJsonStructure(['student']);
    }

    public function test_deleteStudentByID()
    {
        $student = Student::factory()->create();

        $response = $this->delete('/api/students/' . $student->id);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Student Deleted Successfully']);
    }

    public function test_getAllCourses(){
        
        $response = $this->get('/api/courses');

        $response->assertStatus(200);
        $response->assertJsonStructure(['Courses']);
    }

}




