<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user  = Role::findOrCreate('user',  'web');
        $owner = Role::findOrCreate('owner', 'web');
        $admin = Role::findOrCreate('admin', 'web');

        // permissions
        $manageOwn   = Permission::findOrCreate('manage own restaurants', 'web');
        $viewOwnerUi = Permission::findOrCreate('view owner dashboard', 'web');

        $owner->givePermissionTo([$manageOwn, $viewOwnerUi]);
        $admin->givePermissionTo(Permission::all());
    }
}
