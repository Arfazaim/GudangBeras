<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;

    protected $guarded;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}

