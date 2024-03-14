<?php

namespace Database\Factories;

use App\Models\ConsultationHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConsultationHistory>
 */
class ConsultationHistoryFactory extends Factory
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
            'employee_id' => $this->faker->numberBetween(1,15),
            'description' => $this->faker->paragraph()
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (ConsultationHistory $consultationHistory) {
            static $appointmentId = 0;
            $appointmentId++;
            $consultationHistory->appointment_id = $appointmentId;
        })->afterCreating(function (ConsultationHistory $consultationHistor){});
    }
}
