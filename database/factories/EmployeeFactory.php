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
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'date_birthday' => $this->faker->date(),
            'email' => $this->faker->freeEmail(),
            'phone_number' => '3333333333',
            'state' => $this->faker->state(),
            'city' => $this->faker->city(),
            'street_number' => $this->faker->streetAddress(),
            'alternative_contact_name' => $this->faker->firstName(),
            'alternative_contact_phone_number' => $this->faker->lastName(),
            'position_type_id' => $this->faker->numberBetween(1,20)
        ];
    }
}
