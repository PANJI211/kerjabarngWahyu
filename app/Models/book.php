<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemesan',
        'stock_id',
        'jumlah',
        'total_harga',
        'tanggal_booking',
        'status',
        'catatan',
    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class, 'stock_id');
    }
}
