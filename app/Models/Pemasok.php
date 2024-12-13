<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemasok extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pemasok',
        'nama_pemasok',
        'alamat',
        'no_telepon',
        'email'
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}

