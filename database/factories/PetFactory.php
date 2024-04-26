<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
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
            'pet_type' => $this->faker->word(),
            'breed' => $this->faker->word(),
            'weight' => strval($this->faker->numberBetween(1, 80)),
            'height' => strval($this->faker->numberBetween(1, 150)),
            'customer_id' => $this->faker->numberBetween(1, 250)
        ];
    }
}
