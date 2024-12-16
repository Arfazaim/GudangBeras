<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $guarded;

    public function stok()
    {
        return $this->hasMany(Stok::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function pemasok()
    {
        return $this->belongsTo(Pemasok::class);
    }
}

