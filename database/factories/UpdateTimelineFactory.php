<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
use App\Models\User;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UpdateTimeline>
 */
class UpdateTimelineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        
            // "user_id" => User::factory(),
            "user_id" => 24,
            'project_id'=> Project::factory(),
            "employee_id" => Employee::factory(),
            'update_title'=> fake()->jobTitle,
            'update_description'=> fake()->text(10),
            'status'=> fake()->address(),
            'progress_percentage'=> fake()->numberBetween(0,100),
            'image_path'=> fake()->imageUrl
        ];
    }
}
