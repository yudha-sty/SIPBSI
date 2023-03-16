<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\Kategori_Pembiayaan;
use DB;

class NasabahController extends Controller
{
    public function index(Request $request){
        $nasabah = Nasabah::all();
        $kategori =Kategori_Pembiayaan::all();
        return view('nasabah/index', compact('nasabah','kategori'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama',
            'total_pembiayaan',
            'keterangan',
            'kategori_pembiayaan'
        ]);
        Nasabah::create([
            'nama' => request('nama'),
            'total_pembiayaan' => request('total_pembiayaan'),
            'keterangan' => request('keterangan'),
            'kategori_pembiayaan' => request('kategori_pembiayaan')
        ]);
        return redirect()->route('nasabah')->with('success', 'Data Berhasil Ditambah!');
    }

    public function edit($id){
        $nasabah = DB::table('nasabah')->where('id',$id)->get();
        $kategori =Kategori_Pembiayaan::all();
        return view('nasabah/update', ['nasabah' => $nasabah],['kategori' => $kategori]);
    }

    public function update(Request $request){
        DB::table('nasabah')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'total_pembiayaan' => $request->total_pembiayaan,
            'keterangan' => $request->keterangan,
            'kategori_pembiayaan' => $request->kategori_pembiayaan
        ]);
        return redirect()->route('nasabah')->with('success', 'Data Berhasil Di update');
    }
}
