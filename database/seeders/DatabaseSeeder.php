<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
       //       'name' => 'Test User',
       //       'email' => 'test@example.com',
       // ]);

       // Student::factory()->Count(30)->create();

       SubjectGrade::factory()->Count(50)->create();
    }
}
