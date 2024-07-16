<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => fake()->firstName(),
            'lname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phpneNumber(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'province' =>fake()->province(),
            'zip' => fake()->zip(),
            'birthday' => fake()->dateTimeBetween('2000-01', '2010-12-30')->format('Y-m-d')
        ];
    }
}