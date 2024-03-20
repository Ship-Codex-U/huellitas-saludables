<?php

namespace Database\Seeders;

use App\Models\AppointmentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                    [
                        'id' => 1,
                        'status' => 'Solicitado'
                    ],
                    [
                        'id' => 2,
                        'status' => 'Agendado'
                    ],
                    [
                        'id' => 3,
                        'status' => 'Cancelado'
                    ],
                    [
                        'id' => 4,
                        'status' => 'Reprogramado'
                    ],
                    [
                        'id' => 5,
                        'status' => 'Cumplido'
                    ]
                ];

        DB::table('appointment_statuses')->insert($data);
    }
}
