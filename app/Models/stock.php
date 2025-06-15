<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['food_id', 'nama_makanan', 'stok', 'deskripsi'];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function bookings()
    {
        return $this->hasMany(Book::class);
    }
}
