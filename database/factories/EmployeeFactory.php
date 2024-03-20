<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->word(),
            'last_name' => $this->faker->words(2, true),
            'address' => $this->faker->sentence(),
            'phone_number' => $this->faker->phoneNumber(),
            'position_type_id' => $this->faker->numberBetween(1,20)
        ];
    }
}
