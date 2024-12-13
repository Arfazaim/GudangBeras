<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_transaksi',
        'id_produk',
        'id_gudang',
        'id_pelanggan',
        'tanggal',
        'jumlah',
        'harga',
        'total_harga'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function gudang()
    {
        return $this->belongsTo(Gudang::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}

