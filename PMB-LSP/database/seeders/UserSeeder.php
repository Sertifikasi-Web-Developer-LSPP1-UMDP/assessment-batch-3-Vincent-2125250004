<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

    
        $guestRole = Role::firstOrCreate(['name' => 'guest']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        
        foreach (range(1, 10) as $index) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'is_verified' => $faker->boolean, 
            ]);

            // Assign 'guest' role initially
            $user->assignRole($guestRole);

            
            if ($user->is_verified) {
                $user->syncRoles($userRole); 
            }
        }
    }
}
