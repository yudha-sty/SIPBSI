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
                                <th>Nama Pengirim</th>
                                <th>Jabatan</th>
                                <th>Kategori</th>
                                <th>Stok Masuk</th>
                                <th>Stok Keluar</th>
                                <th>Tanggal Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($barangmasuk as $bm)
                            <tr>
                                <td>{{ $bm->id_barang_masuk }}</td>
                                <td>{{ $bm->nama_barang }}</td>
                                <td>{{ $bm->nama_pengirim }}</td>
                                <td>{{ $bm->satuan }}</td>
                                <td>{{ $bm->qty }}</td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Nama Pengirim</th>
                                <th>Jabatan</th>
                                <th>Kategori</th>
                                <th>Stok Masuk</th>
                                <th>Stok Keluar</th>
                                <th>Tanggal Update</th>
                            </tr>
                        </tfoot>
                    </table>
            </div>
            <!-- End Card -->
            </div>
        </div>        
    </div>
@endsection