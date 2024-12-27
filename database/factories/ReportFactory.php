<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "type"=> fake()->text(10),
            "generated_by" => User::factory(),
            "view_preferences" => fake()->text(10),
            "last_updated" =>fake()->dateTimeThisYear
        ];
    }
}
