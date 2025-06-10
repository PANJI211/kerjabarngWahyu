<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class special_menu extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
    ];

}
