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
        $roles = [
            'admin' => [
            'create pendaftaran', 'read pendaftaran', 'update pendaftaran', 'delete pendaftaran',
            'create pengumuman', 'read pengumuman', 'update pengumuman', 'delete pengumuman',
            'create user', 'read user', 'update user', 'delete user'
            ],
            'user' => [
            'create pendaftaran', 'read pendaftaran', 'read pengumuman'
            ],
            'guest' => [
            ]
        ];

        foreach ($roles as $roleName => $permissions) {
            $role = Role::create(['name' => $roleName]);
            foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
            }
            $role->givePermissionTo($permissions);
        }



    }
}
