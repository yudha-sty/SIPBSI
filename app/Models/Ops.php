<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ops extends Model
{
    use HasFactory;
    protected $table = "ops";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama',
        'jabatan',
    ];

    public function barangmasuk(){
        return $this->hasMany(BarangMasuk::class);
    }
}
