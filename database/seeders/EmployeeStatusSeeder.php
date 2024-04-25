<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'status' => 'activo'
            ],
            [
                'id' => 2,
                'status' => 'baja'
            ]
        ];

        DB::table('employee_statuses')->insert($data);
    }
}
