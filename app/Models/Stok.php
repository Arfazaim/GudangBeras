<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stok extends Model
{
    use HasFactory;

    protected $guarded;

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function gudang()
    {
        return $this->belongsTo(Gudang::class);
    }
}

