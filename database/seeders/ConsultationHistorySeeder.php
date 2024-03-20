<?php

namespace Database\Seeders;

use App\Models\ConsultationHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConsultationHistory::factory()->count(400)->create();
    }
}
