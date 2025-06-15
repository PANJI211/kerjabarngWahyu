<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['stock_id', 'nama_pemesan', 'jumlah', 'total_harga', 'tanggal_booking', 'status', 'catatan'];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

        public function user()
    {
        return $this->belongsTo(User::class);
    }

}
