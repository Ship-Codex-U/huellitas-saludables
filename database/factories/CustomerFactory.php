<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'city' => $this->faker->word(),
            'alternative_contact_name' => $this->faker->word(),
            'alternative_contact_phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->freeEmail(),
            'phone_number' => $this->faker->phoneNumber()
        ];
    }
}
