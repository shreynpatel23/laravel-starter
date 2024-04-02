<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Person;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->count(2)->create();
        Student::factory()->count(20)->create();
        Course::factory()->create([
            'course_id' => 'HTTP-5225',
            'course_name' => 'PHP',
            'course_desc' => 'In this course we will learn about php and laravel'
        ]);
        Course::factory()->create([
            'course_id' => 'HTTP-5226',
            'course_name' => 'ASP.NET',
            'course_desc' => 'You will learn ASP.NET in this course'
        ]);
        Course::factory()->create([
            'course_id' => 'HTTP-5227',
            'course_name' => 'Javascript',
            'course_desc' => 'This course will teach you Javascript'
        ]);
        Person::factory()->count(20)->create();
    }
}
