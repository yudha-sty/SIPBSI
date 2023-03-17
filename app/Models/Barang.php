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
        return $this->belongsTo(Kategori_Barang::class, 'id_kategori_barang', 'id');
    }
}
