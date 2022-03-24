<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        Role::create(['name' => 'customer_team']);
        Role::create(['name' => 'customer']);

        $user = User::create([
            "name" => "Admin",
            "email" => "admin@admin.com",
            "password" => Hash::make('secret123'),
        ]);

        $user->assignRole($admin);
    }
}
