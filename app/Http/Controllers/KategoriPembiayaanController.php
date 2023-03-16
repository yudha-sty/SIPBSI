<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_Pembiayaan;
use DB;

class KategoriPembiayaanController extends Controller
{
    public function index(Request $request){
        $kategori = Kategori_Pembiayaan::all();
        return view('kategori_pembiayaan/index', compact('kategori'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'kategori'
        ]);
        Kategori_Pembiayaan::create([
            'kategori' => request('kategori')
        ]);
        return redirect()->route('kategori-pembiayaan')->with('success', 'Data Berhasil Ditambah!');
    }

    public function edit($id){
        $kategori = DB::table('kategori_pembiayaan')->where('id',$id)->get();
        return view('kategori_pembiayaan/update', ['kategori' => $kategori]);
    }

    public function update(Request $request){
        DB::table('kategori_pembiayaan')->where('id', $request->id)->update([
            'kategori' => $request->kategori
        ]);
        return redirect()->route('kategori-pembiayaan')->with('success', 'Data Berhasil Di update');
    }

    public function destroy($id){
        DB::table('kategori_pembiayaan')->where('id', $id)->delete();
        return redirect()->route('kategori-pembiayaan')->with('success', 'Data Berhasil Dihapus!');
    }
}
