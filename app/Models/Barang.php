<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barang";

    protected $fillable = [
        'id_kategori_barang',
        'nama_barang',
        'stok'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori_Barang::class, 'id_kategori_barang', 'id');
    }
}
