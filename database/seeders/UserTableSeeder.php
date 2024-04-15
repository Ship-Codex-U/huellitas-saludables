<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Usuario',
                'last_name' => 'Desarrollador',
                'email' => 'dev@huellitassaludables.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'user_type' => 'dev',
                'employee_id' => '1',
                'status' => 'active'
            ],
            [
                'first_name' => 'Usuario',
                'last_name' => 'Administrador',
                'email' => 'admin@huellitassaludables.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'user_type' => 'admin',
                'employee_id' => '2',
                'status' => 'active',
            ],
            [
                'first_name' => 'Usuario',
                'last_name' => 'Recursos Humanos',
                'email' => 'rh@huellitassaludables.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'user_type' => 'rh',
                'employee_id' => '3',
                'status' => 'active',
            ],
            [
                'first_name' => 'Usuario',
                'last_name' => 'Recepcionista',
                'email' => 'recepcion@huellitassaludables.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'user_type' => 'receptionist',
                'employee_id' => '4',
                'status' => 'active'
            ],
            [
                'first_name' => 'Usuario',
                'last_name' => 'Veterinario',
                'email' => 'veterinario01@huellitassaludables.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'user_type' => 'veterinarian',
                'employee_id' => '5',
                'status' => 'active'
            ]
        ];
        foreach ($users as $key => $value) {
            $user = User::create($value);
            $user->assignRole($value['user_type']);
        }
    }
}
