<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create(['name' => 'panji', 'email' => 'admin1@gmail.com', 'role' => 'admin', 'password'=> 'admin1' ]);
       User::create(['name' => 'wahyu', 'email' => 'user1@gmail.com', 'role' => 'user', 'password'=> 'user1' ]);
    }
}
