<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $roleSupperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin       = Role::create(['name' => 'admin']);
        $roleManager     = Role::create(['name' => 'manager']);
        $roleCustomer    = Role::create(['name' => 'customer']);

        $permissions = [
            // Admin Permissions
            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.delete',
            'admin.approve',

            // Role Permissions
            'role.create',
            'role.view',
            'role.edit',
            'role.delete',
            'role.approve',

            // Dashboard
            'dashboard.view',

            // Profile
            'profile.view',
            'profile.edit',
        ];

        // Create & Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            // Create Permission
            $permission = Permission::create(['name' => $permissions[$i]]);

            $roleSupperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSupperAdmin);
        }
    }
}
