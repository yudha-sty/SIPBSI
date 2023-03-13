<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = "barangmasuk";

    protected $fillable = [
        'nama_barang',
        'nama_pengirim',
        'satuan',
        'qty',
        'kategori',
        'keterangan',
        'created_at'
    ];
}
