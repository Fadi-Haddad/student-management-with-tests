<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Laravel',
            'description' => 'Introduction to Laravel',
            'steps' => 'step 1, step 2, step 3',
        ]);

        DB::table('courses')->insert([
            'name' => 'Autocad',
            'description' => 'Introduction to Autocad',
            'steps' => 'step 1, step 2, step 3, step 4',
        ]);

    }
}
