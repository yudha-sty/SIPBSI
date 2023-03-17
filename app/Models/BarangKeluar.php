<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $table = "barangkeluar";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_barang',
        'nama_peminjam',
        'kategori',
        'stok_keluar',
        'created_at'
    ];
}
