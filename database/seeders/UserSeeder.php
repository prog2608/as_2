<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'is_admin' => 1,
        ]);
        User::create([
            'name' => 'nury',
            'username' => 'nury',
            'password' => bcrypt('password'),
            'is_admin' => 0,
        ]);
    }
}
