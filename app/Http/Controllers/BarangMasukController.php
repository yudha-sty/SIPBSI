<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function index(Request $request){
        $barangmasuk = BarangMasuk::all();
        $ops = Ops::all();
        $kategori = kategori_Barang::all();

        return view('barang/masuk/index', compact('barangmasuk','ops','kategori'));
    }
}