<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "project_id" => Project::factory(),
            "total_amount" => fake()->numberBetween(99,999),
            "date_issued" => fake()->dateTimeThisYear,
            "status" => fake()->text(10),
        ];
    }
}
