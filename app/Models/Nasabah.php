<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $table = "nasabah";

    protected $fillable = [
        'id_kategori_pembiayaan',
        'nama',
        'kategori_pembiayaan'
    ];

    public function kategori_pembiayaan(){
        return $this->hasMany(Kategori_Pembiayaan::class);
    }
}
