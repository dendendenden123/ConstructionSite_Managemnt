<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payroll>
 */
class PayrollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employee_id" => Employee::factory(),
            "hours_worked" => fake()->numberBetween(1,100),
            "pay_period_start" => fake()->dateTimeThisYear(),
            "pay_period_end" => fake()->dateTimeThisYear,
            "gross_salary" => fake()->numberBetween(100,1000),
            "deductions" => fake()->numberBetween(0, 100),
            "net_dalary" => fake()->numberBetween(100, 999)
        ];
    }
}
