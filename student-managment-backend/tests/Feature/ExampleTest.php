<?php

namespace Tests\Feature;

use App\Models\Student;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_getAllStudents()
    {
        $response = $this->get('/api/students');

        $response->assertStatus(200);
        $response->assertJsonStructure(['students']);
    }

}




