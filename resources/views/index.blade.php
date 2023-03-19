<?php
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Kategori_Barang;
use App\Models\Nasabah;
use App\Models\Ops;
?>
@extends('layouts.app')
@section('content')                
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Barang Masuk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tbm }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Barang Keluar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tbk }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Nasabah Pembiayaan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tnp }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Data Operasional</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tdo }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Barang</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Report:</div>
                                            <a class="dropdown-item" href="#">PDF</a>
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
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">VISI & MISI BANK SYARIAH INDONESIA</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                   <img src="{{ 'img/logo-bsi.png' }}" height=211px width=211px>
                                   <h1 class="h3 mb-0 text-gray-800"><b>Visi :</b></h1>
                                   <b>TOP 10 GLOBAL ISLAMIC BANK</b> <br>
<br>
                                   <h1 class="h3 mb-0 text-gray-800"><b>MISI:</b></h1>
                                   <p class="h5 mb-0 text-gray-800"><b>1. Memberikan akses solusi keuangan syariah di Indonesia</b></p>
                                Melayani >20 juta nasabah dan menjadi top 5 bank berdasarkan asset (500+T) dan nilai buku 50 T di tahun 2025.<br>
                                <p class="h5 mb-0 text-gray-800"><b>2. Menjadi bank besar yang memberikan nilai terbaik bagi para pemegang saham</b> </p>
                                Top 5 bank yang paling profitable di Indonesia (ROE 18%) dan valuasi kuat (PB>2). <br>
                                <p class="h5 mb-0 text-gray-800"><b>3. Menjadi perusahaan pilihan dan kebanggaan para talenta terbaik Indonesia</b></p>
                                Perusahaan dengan nilai yang kuat dan memberdayakan masyarakat serta berkomitmen pada pengembangan karyawan dengan budaya berbasis kinerja.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
                @endsection