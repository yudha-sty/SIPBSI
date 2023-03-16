<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Barang extends Model
{
    use HasFactory;

    protected $table = "kategori_barang";
    protected $primaryKey = "id";
    protected $fillable = [
        'kategori'
    ];
}
