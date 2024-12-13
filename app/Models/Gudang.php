<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_gudang',
        'nama_gudang',
        'alamat',
        'kapasitas',
        'status'
    ];

    public function stok()
    {
        return $this->hasMany(Stok::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}

