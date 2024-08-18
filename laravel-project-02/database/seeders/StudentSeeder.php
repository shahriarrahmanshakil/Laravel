<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student::create([
            'name' => 'Shahriar Rahman Shakil',
            'address' => 'Dhaka,Bangladesh'
        ]);
    }
}
