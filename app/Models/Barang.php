<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barang";

    protected $fillable = [
        'nama_barang',
        'kategori',
        'stok',
    ];

    public function kategori()
    {
        return $this->hasMany(Kategori_Barang::class);
    }

    public function barang_masuk(){
        return $this->hasMany(BarangMasuk::class);
    }

    public function barang_keluar(){
        return $this->hasMany(BarangKeluar::class);
    }

    public function ops(){
        return $this->hasMany(Ops::class);
    }
}
