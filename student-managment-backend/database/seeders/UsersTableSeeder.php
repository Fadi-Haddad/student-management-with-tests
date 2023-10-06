<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'firstStudent',
            'email' => 'firststudent@domain.com',
            'password' => Hash::make('firstStudentPass'),
        ]);

        DB::table('users')->insert([
            'name' => 'secondStudent',
            'email' => 'secondstudent@domain.com',
            'password' => Hash::make('secondStudentPass'),
        ]);
    }
}


