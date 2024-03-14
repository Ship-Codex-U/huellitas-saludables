<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_appointments' => $this->faker->dateTime(),
            'pet_id' => $this->faker->numberBetween(1,300),
            'customer_id' => $this->faker->numberBetween(1,250),
            'employee_id' => $this->faker->numberBetween(1,15),
            'appointment_status_id' => $this->faker->numberBetween(1,5),
            'comments' => $this->faker->optional($weight = 30)->sentence()
        ];
    }
}
