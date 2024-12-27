<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "project_id" =>1,
            "name" => fake()->name,
            "description" => fake()->text(50),
            "employee_id" => Employee::factory(),
            "start_date" => fake()->dateTimeThisYear,
            "due_date" => fake()->dateTimeThisYear,
            "status" => fake()->text(10),
        ];
    }
}
