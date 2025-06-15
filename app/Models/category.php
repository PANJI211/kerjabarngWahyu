<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['food_id', 'nama_kategori', 'deskripsi'];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
