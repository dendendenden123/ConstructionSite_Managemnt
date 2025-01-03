<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           "name"=> fake()->name,
            "rfid_tag" => fake()->numberBetween(9999,99999),
           "position" => fake()->jobTitle,
            "department" => fake()->jobTitle,
            "hourly_rate" => fake()->numberBetween(99,999)
        ];
    }
}
