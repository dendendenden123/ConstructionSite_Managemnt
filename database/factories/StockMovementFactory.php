<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StockMovement>
 */
class StockMovementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "inventory_id" =>  Inventory::factory(),
            "movement_type" => fake()->text(10),
            "quantity" => fake()->numberBetween(1, 100),
            "date" =>fake()->dateTimeThisYear,
            "project_id" => Project::factory()
        ];
    }
}
