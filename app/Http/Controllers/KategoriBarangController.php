<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index(){
        return view('kategori_barang/index');
    }
}
