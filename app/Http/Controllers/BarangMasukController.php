<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function index(Request $request){
        $barangmasuk = BarangMasuk::all();

        return view('barang/masuk/index', compact('barangmasuk'));
    }
}
