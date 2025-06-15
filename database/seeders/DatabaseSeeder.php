<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Food;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed User
        $this->call([
            UserSeeder::class,
        ]);

        // Seed Category (karena food butuh category_id)
        Category::factory(5)->create();

        // Seed Food (otomatis buat Stock & SpecialMenu via factory)
        Food::factory(10)->create();

        \App\Models\Food::factory()->count(10)->create();

    }
}
