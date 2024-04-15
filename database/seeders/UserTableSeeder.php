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
                'username' => 'HS00',
                'email' => 'dev@huellitassaludables.com',
                'password' => bcrypt('password'),
                'phone_number' => '+12398190255',
                'email_verified_at' => now(),
                'user_type' => 'dev',
                'status' => 'active'
            ],
            [
                'first_name' => 'Usuario',
                'last_name' => 'Administrador',
                'username' => 'HS01',
                'email' => 'admin@huellitassaludables.com',
                'password' => bcrypt('password'),
                'phone_number' => '+12398190255',
                'email_verified_at' => now(),
                'user_type' => 'admin',
                'status' => 'active',
            ],
            [
                'first_name' => 'Usuario',
                'last_name' => 'Recursos Humanos',
                'username' => 'HS02',
                'email' => 'rh@huellitassaludables.com',
                'password' => bcrypt('password'),
                'phone_number' => '+12398190255',
                'email_verified_at' => now(),
                'user_type' => 'rh',
                'status' => 'active',
            ],
            [
                'first_name' => 'Usuario',
                'last_name' => 'Recepcionista',
                'username' => 'HS03',
                'email' => 'recepcion@huellitassaludables.com',
                'password' => bcrypt('password'),
                'phone_number' => '+12398190255',
                'email_verified_at' => now(),
                'user_type' => 'receptionist',
                'status' => 'active'
            ],
            [
                'first_name' => 'Usuario',
                'last_name' => 'Veterinario',
                'username' => 'HS04',
                'email' => 'veterinario01@huellitassaludables.com',
                'password' => bcrypt('password'),
                'phone_number' => '+12398190255',
                'email_verified_at' => now(),
                'user_type' => 'veterinarian',
                'status' => 'active'
            ]
        ];
        foreach ($users as $key => $value) {
            $user = User::create($value);
            $user->assignRole($value['user_type']);
        }
    }
}
