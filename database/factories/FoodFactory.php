<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class FoodFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(), // relasi category
            'nama' => $this->faker->word(),
            'deskripsi' => $this->faker->sentence(),
            'gambar' => 'default.png',
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($food) {
            // Buat relasi stock dan special menu
            \App\Models\Stock::factory()->create(['food_id' => $food->id]);
            \App\Models\SpecialMenu::factory()->create(['food_id' => $food->id]);
        });
    }
}
