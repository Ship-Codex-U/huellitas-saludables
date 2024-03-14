<?php

namespace Database\Seeders;

use App\Models\PetVaccine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetVaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetVaccine::factory()->count(100)->create();
    }
}
