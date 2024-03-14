<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetVaccine>
 */
class PetVaccineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => $this->faker->numberBetween(1,300),
            'vaccine_id' => $this->faker->numberBetween(1,20),
            'employee_id' => $this->faker->numberBetween(1,15)
        ];
    }
}
