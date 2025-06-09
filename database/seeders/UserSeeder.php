<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create(['name' => 'panji', 'email' => 'admin1@gmail.com', 'role' => 'admin', 'status' => 'active', 'password' => Hash::make('admin1') ]);
       User::create(['name' => 'wahyu', 'email' => 'user1@gmail.com', 'role' => 'user', 'status' => 'active', 'password' => Hash::make('user1') ]);
    }
}
