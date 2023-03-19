<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Kategori_Barang;
use App\Models\Ops;
use DB;

class BarangController extends Controller
{
    public function index(Request $request){
        $barang = Barang::all();
        $barangmasuk = BarangMasuk::all();
        $barangkeluar = BarangKeluar::all();
        $kategori = Kategori_Barang::all();
        $ops = Ops::all();
        return view('barang/master_barang/index', compact('barang','barangmasuk','barangkeluar','kategori','ops'));
    }
}
