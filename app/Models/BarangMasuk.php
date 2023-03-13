<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = "barangmasuk";

    protected $fillable = [
        'id_barang',
        'id_ops',
        'id_kategori_barang',
        'stok_masuk',
        'stok_total',
        'created_at'
    ];

    public function barang(){
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }

    public function ops(){
        return $this->belongsTo(Ops::class, 'id_ops', 'id');
    }

    public function kategori(){
        return $this->belongsTo(Kategori_Barang::class, 'id_kategori_barang', 'id');
    }
}
