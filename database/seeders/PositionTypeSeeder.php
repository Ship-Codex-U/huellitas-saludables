<?php

namespace Database\Seeders;

use App\Models\PositionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'type' => 'Veterinario'
            ],
            [
                'id' => 2,
                'type' => 'Recursos Humanos'
            ],
            [
                'id' => 3,
                'type' => 'Recepcionista'
            ],
            [
                'id' => 4,
                'type' => 'Contador'
            ],
            [
                'id' => 5,
                'type' => 'Cirujano A'
            ],
            [
                'id' => 6,
                'type' => 'Cirujano B'
            ],
            [
                'id' => 7,
                'type' => 'Limpieza'
            ],
            [
                'id' => 8,
                'type' => 'Compras'
            ],
            [
                'id' => 9,
                'type' => 'Administrativo'
            ],
            [
                'id' => 10,
                'type' => 'Veterinario analgésica'
            ],

        ];

        DB::table('position_types')->insert($data);
    }
}
