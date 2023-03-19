<?php
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Kategori_Barang;
use App\Models\Ops;
?>
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action:</div>
                            <a class="dropdown-item" href="#">Export PDF</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>

            <!-- Card Body -->
                <div class="card-body">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangmasuk as $bm)
                            <tr>
                                <td>{{ $bm->id }}</td>
                                <td>{{ $bm->nama_barang }}</td>
                                <td>{{ $bm->kategori}}</td>
                                <td>{{ BarangMasuk::where('id', $bm->id)->sum('stok_masuk') - BarangKeluar::where('id',$bm->id)->sum('stok_keluar') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                </tr>
                            </tr>
                        </tfoot>
                    </table>
            </div>
            <!-- End Card -->
            </div>
        </div>        
    </div>
@endsection