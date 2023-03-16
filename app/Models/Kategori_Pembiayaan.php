<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Pembiayaan extends Model
{
    use HasFactory;

    protected $table = "kategori_pembiayaan";
    protected $primaryKey = "id";
    protected $fillable = [
        'kategori'
    ];
}
