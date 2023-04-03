<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use PDF;
use DB;

class LaporanController extends Controller
{
    public function index(Request $request){
        $barangmasuk = BarangMasuk::all();
        return view('tes', compact('barangmasuk'));
    }
}
