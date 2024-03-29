<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_Barang;
use DB;

class KategoriBarangController extends Controller
{
    public function index(Request $request){
        $kategori = Kategori_Barang::all();
        return view('kategori_barang/index', compact('kategori'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'kategori'
        ]);

        //creat category
        Kategori_Barang::create([
            'kategori'=>request('kategori')
        ]);

        //redirect to index
        return redirect()->route('kategori-barang')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id){
        $kategori = DB::table('kategori_barang')->where('id',$id)->get();
        return view('kategori_barang/update', ['kategori' => $kategori]);
    }

    public function update(Request $request){
        DB::table('kategori_barang')->where('id', $request->id)->update([
            'kategori' => $request->kategori
        ]);
        return redirect()->route('kategori-barang')->with('success', 'Data Berhasil Di update');
    }

    public function destroy($id){
        DB::table('kategori_barang')->where('id', $id)->delete();
        return redirect()->route('kategori-barang')->with('success', 'Data Berhasil Dihapus!');
    }
}
