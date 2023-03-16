<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ops;
use DB;

class OpsController extends Controller
{
    public function index(Request $request){
        $ops = Ops::all();
        return view('ops/index', compact('ops'));
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'nama',
            'jabatan'
        ]);
        Ops::create([
            'nama'=>request('nama'),
            'jabatan'=>request('jabatan')
        ]);
        return redirect()->route('ops')->with('success', 'Data Berhasil Ditambah!');
    }

    public function edit($id){
        $ops = DB::table('ops')->where('id',$id)->get();
        return view('ops/update', ['ops' => $ops]);
    }

    public function update(Request $request){
        DB::table('ops')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);
        return redirect()->route('ops')->with('success', 'Data Berhasil Di update');
    }

    public function destroy($id){
        DB::table('ops')->where('id', $id)->delete();
        return redirect()->route('ops')->with('success', 'Data Berhasil Dihapus!');
    }
}
