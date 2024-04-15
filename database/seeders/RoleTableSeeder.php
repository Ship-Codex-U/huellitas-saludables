<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'admin',
            'title' => 'Administrador',
            'status' => 1
        ]);

        $rhRole = Role::create([
            'name' => 'rh',
            'title' => 'Recursos Humanos',
            'status' => 1
        ]);

        $veterinarianRole = Role::create([
            'name' => 'veterinarian',
            'title' => 'Veterinario',
            'status' => 1
        ]);

        $receptionistRole = Role::create([
            'name' => 'receptionist',
            'title' => 'Recepcionista',
            'status' => 1
        ]);

        $devRole = Role::create([
            'name' => 'dev',
            'title' => 'Desarrollador',
            'status' => 1
        ]);

        Permission::create([
            'name' => 'dashboard.tools',
            'title' => 'Modulo Herramientas'
        ])->syncRoles([$devRole]);
        Permission::create([
            'name' => 'dashboard.role',
            'title' => 'Modulo Roles Y Permisos'
        ])->syncRoles([$devRole, $adminRole]);
        Permission::create([
            'name' => 'dashboard.users',
            'title' => 'Modulo Usuario'
        ])->syncRoles([$devRole, $adminRole]);
        Permission::create([
            'name' => 'dashboard.employees',
            'title' => 'Modulo Empleados'
        ])->syncRoles([$devRole, $adminRole, $rhRole]);
        Permission::create([
            'name' => 'dashboard.appointments',
            'title' => 'Modulo Citas'
        ])->syncRoles([$devRole, $adminRole, $receptionistRole]);
        Permission::create([
            'name' => 'dashboard.customers',
            'title' => 'Modulo Clientes'
        ])->syncRoles([$devRole, $adminRole, $receptionistRole, $veterinarianRole]);
        Permission::create([
            'name' => 'dashboard.pets',
            'title' => 'Modulo Mascotas'
        ])->syncRoles([$devRole, $adminRole, $receptionistRole, $veterinarianRole]);
        Permission::create([
            'name' => 'dashboard.consultationhistories',
            'title' => 'Modulo Historia Clinico'
        ])->syncRoles([$devRole, $adminRole, $veterinarianRole]);
        Permission::create([
            'name' => 'dashboard.comunicacion',
            'title' => 'Modulo Comunicacion'
        ])->syncRoles([$devRole, $adminRole, $receptionistRole]);
        Permission::create([
            'name' => 'label.administracion',
            'title' => 'Etiqueta Administración'
        ])->syncRoles([$devRole, $adminRole]);
        Permission::create([
            'name' => 'label.recursosHumanos',
            'title' => 'Etiqueta RH'
        ])->syncRoles([$devRole, $adminRole, $rhRole]);
        Permission::create([
            'name' => 'label.controlVeterinaria',
            'title' => 'Etiqueta Control veterinaria'
        ])->syncRoles([$devRole, $adminRole, $receptionistRole, $veterinarianRole]);

    }
}
