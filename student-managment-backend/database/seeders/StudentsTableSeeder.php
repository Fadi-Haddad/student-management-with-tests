<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('students')->insert([
                'name' => 'Fadi Haddad',
                'age' => 32,
            ]);
    
            DB::table('students')->insert([
                'name' => 'Rami Haddad',
                'age' => 30,
            ]);
    
        }
    }
}
