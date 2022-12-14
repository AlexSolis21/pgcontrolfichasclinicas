<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles
        $role1 = Role::create(['name' => 'Medico']);
        $role2 = Role::create(['name' => 'Secretaria']);

        // create permissions
        Permission::create(['name' => 'editar paciente']);
    }
}