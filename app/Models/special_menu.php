<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialMenu extends Model
{
    protected $fillable = ['food_id', 'nama', 'harga', 'deskripsi', 'gambar'];

    // Relasi: SpecialMenu milik satu Food
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
