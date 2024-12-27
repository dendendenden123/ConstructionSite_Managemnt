<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $statusList = ["done", "cancelled", "delayed", "In progress"];
        return [
            "name" => fake()->name,
            "description" => fake()->text(50),
            "start_date" => fake()->dateTimeThisYear,
            "end_date" => fake()->dateTimeThisYear,
            "budget" => fake()->numberBetween(100, 999),
            "status" => $statusList[rand(0,3)],
            "user_id" => User::factory()
        ];
    }
}
