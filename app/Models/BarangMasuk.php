<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = "barangmasuk";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_barang',
        'nama_pengirim',
        'jabatan_pengirim',
        'kategori',
        'stok_masuk',
        'created_at'
    ];

    public function barang(){
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }

    public function ops(){
        return $this->hasMany(Ops::class);
    }

    public function kategori(){
        return $this->hasMany(Kategori_Barang::class);
    }
}
