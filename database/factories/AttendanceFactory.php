<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employee_id" => 2,
            "check_in_time" => fake()->dateTimeThisMonth(),
            "check_out_time" => fake()->dateTimeThisMonth(),
            "hours_worked" => fake()->numberBetween(10,100)
        ];
    }
}
