<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        // create user
        $user = User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('user');
    }
}
