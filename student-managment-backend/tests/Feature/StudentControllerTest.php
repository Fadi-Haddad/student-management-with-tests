<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function testGetAllStudents()
    {
        // Seed the database with sample student data
        factory(Student::class, 3)->create();
        testcase::factory()->count(50)->create();

        // Make a GET request to the /api/students endpoint
        $response = $this->get('/api/students');

        // Assert the response status code (200 for success)
        $response->assertStatus(200);

        // Assert the JSON structure (assuming it returns JSON data)
        $response->assertJsonStructure(['students']);

        // You can add more assertions as needed based on your API response
    }
}
