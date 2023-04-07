<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Ops;
use App\Models\Kategori_Barang;
use DB;
use PDF;

class BarangKeluarController extends Controller
{
    public function index(Request $request){
        $barangkeluar = BarangKeluar::all();
        $barangmasuk = BarangMasuk::all();
        $ops = Ops::all();
        $kategori = Kategori_Barang::all();
        return view('barang/keluar/index', compact('barangkeluar','barangmasuk','ops','kategori'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_barang',
            'nama_peminjam',
            'jabatan_peminjam',
            'kategori',
            'stok_keluar'
        ]);
        BarangKeluar::create([
            'nama_barang' => request('nama_barang'),
            'nama_peminjam' => request('nama_peminjam'),
            'jabatan_peminjam' => request('jabatan_peminjam'),
            'kategori' => request('kategori'),
            'stok_keluar' => request('stok_keluar')
        ]);
        return redirect()->route('barang-keluar')->with('success', 'Data Berhasil Ditambah!');
    }

    public function edit($id){
        $barangkeluar = DB::table('barangkeluar')->where('id',$id)->get();
        $barangmasuk = BarangMasuk::all();
        $kategori = Kategori_Barang::all();
        $ops = Ops::all();
        return view('barang/keluar/update', compact('barangkeluar','barangmasuk','kategori','ops'));
    }

    public function update(Request $request){
        DB::table('barangkeluar')->where('id', $request->id)->update([
            'nama_barang' => $request->nama_barang,
            'nama_peminjam' => $request->nama_peminjam,
            'jabatan_peminjam' => $request->jabatan_peminjam,
            'kategori' => $request->kategori,
            'stok_keluar' => $request->stok_keluar
        ]);
        return redirect()->route('barang-keluar')->with('success', 'Data Berhasil Di update');
    }

    public function export(Request $request){
        $barangkeluar = BarangKeluar::all();
        $data = PDF::loadview('barang/keluar/laporan_pdf', compact('barangkeluar'));
        return $data->download('laporan_barang_keluar.pdf');
    }
}
