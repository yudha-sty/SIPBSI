<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Ops;
use App\Models\Kategori_Barang;
use DB;
use PDF;

class BarangMasukController extends Controller
{
    public function index(Request $request){
        $barangmasuk = BarangMasuk::all();
        $ops = Ops::all();
        $kategori = Kategori_Barang::all();

        return view('barang/masuk/index', compact('barangmasuk','ops','kategori'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_barang',
            'nama_pengirim',
            'jabatan_pengirim',
            'kategori',
            'stok_masuk'
        ]);
        BarangMasuk::create([
            'nama_barang' => request('nama_barang'),
            'nama_pengirim' => request('nama_pengirim'),
            'jabatan_pengirim' => request('jabatan_pengirim'),
            'kategori' => request('kategori'),
            'stok_masuk' => request('stok_masuk')
        ]);
        return redirect()->route('barang-masuk')->with('success', 'Data Berhasil Ditambah!');
    }

    public function edit($id){
        $barangmasuk = DB::table('barangmasuk')->where('id',$id)->get();
        $kategori = Kategori_Barang::all();
        $ops = Ops::all();
        return view('barang/masuk/update', compact('barangmasuk','kategori','ops'));
    }

    public function update(Request $request){
        DB::table('barangmasuk')->where('id', $request->id)->update([
            'nama_barang' => $request->nama_barang,
            'nama_pengirim' => $request->nama_pengirim,
            'jabatan_pengirim' => $request->jabatan_pengirim,
            'kategori' => $request->kategori,
            'stok_masuk' => $request->stok_masuk
        ]);
        return redirect()->route('barang-masuk')->with('success', 'Data Berhasil Di update');
    }

    public function destroy($id){
        DB::table('barangmasuk')->where('id', $id)->delete();
        return redirect()->route('barang-masuk')->with('success', 'Data Berhasil Dihapus!');
    }

    public function export(Request $request){
        $barangmasuk = BarangMasuk::all();
        $data = PDF::loadview('barang/masuk/laporan_pdf', compact('barangmasuk'));
        return $data->download('laporan.pdf');
    }
}