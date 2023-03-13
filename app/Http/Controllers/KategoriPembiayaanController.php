<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriPembiayaanController extends Controller
{
    public function index(){
        return view('kategori_pembiayaan/index');
    }
}
