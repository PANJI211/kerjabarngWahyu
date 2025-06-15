<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'gambar'];

    // Relasi: Food memiliki banyak SpecialMenu
    public function specialMenus()
    {
        return $this->hasMany(SpecialMenu::class);
    }

    // Relasi: Food memiliki banyak Stock
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    // Relasi: Food memiliki banyak Category
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
