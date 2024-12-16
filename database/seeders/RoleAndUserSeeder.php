<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat Roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        $superAdminRole = Role::create(['name' => 'super-admin']);

        // Membuat User dengan Role Admin
        $admin = User::create([
            'name' => 'Admin User',
            'username' => 'adminuser',
            'password' => Hash::make('password123'),
        ]);
        $admin->assignRole($adminRole);

        // Membuat User dengan Role User
        $user = User::create([
            'name' => 'Regular User',
            'username' => 'regularuser',
            'password' => Hash::make('password123'),
        ]);
        $user->assignRole($userRole);

        // Membuat User dengan Role Super Admin
        $superAdmin = User::create([
            'name' => 'Super Admin User',
            'username' => 'superadminuser',
            'password' => Hash::make('password123'),
        ]);
        $superAdmin->assignRole($superAdminRole);
    }
}
