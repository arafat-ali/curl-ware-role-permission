<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'show users']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'create and assign role']);
        Permission::create(['name' => 'give attendance']);
        Permission::create(['name' => 'show attendances']);
        Permission::create(['name' => 'edit attendance']);
        Permission::create(['name' => 'delete attendance']);

        Role::create(['name' => 'employee'])->givePermissionTo('give attendance');
        Role::create(['name' => 'manager'])->givePermissionTo(['show attendances', 'give attendance', 'edit attendance']);
        Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
    }
}
