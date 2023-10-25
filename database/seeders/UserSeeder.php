<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Administrator',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'fullname' => 'Manager',
            'username' => 'manager',
            'role' => 'manager',
            'password' => bcrypt('manager123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
