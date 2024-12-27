<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "item_name" => fake()->name,
            "item_description" => fake()->text(50),
            "rfid_tag" => fake()->numberBetween(999,9999),
            "quantity" => fake()->numberBetween(999,9999),
            "unit_price" => fake()->numberBetween(999,9999),
            "redorder_level" => fake()->numberBetween(99,999)
        ];
    }
}
