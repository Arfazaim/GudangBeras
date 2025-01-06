<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded;

    public function gudang()
    {
        return $this->belongsTo(Gudang::class, 'gudang_id', 'kode_gudang');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
