<?php
use App\Models\Nasabah;
use App\Models\Kategori_Pembiayaan;
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
                    <h6 class="m-0 font-weight-bold text-primary">Data Nasabah</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action:</div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#modalbarangmasuk" href="#">Tambah Data</a>
                            <a class="dropdown-item" href="#">Export PDF</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>

                    <!-- Modal Insert -->
                    <div class="modal fade bd-example-modal-lg" id="modalbarangmasuk" tabindex="-1" role="dialog" aria-labelledby="modalbarangmasuk" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('nasabah.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="Nama Nasabah" class="col-sm-2 col-form-label">Nama Nasabah</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kategori" name="nama" placeholder="Nama Nasabah">
                                            </div>
                                            @if ($errors->has('nama'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama') }}
                                            </div>
                                        @endif
                                        </div> 
                                        <div class="form-group row">
                                            <label for="validationCustom02" class="col-sm-2 col-form-label">Kategori Pembiayaan</label>
                                            <select name="kategori_pembiayaan" id="kategori_pembiayaan" class="custom-select mb-3">
                                                <option selected>==Pilih Kategori Pembiayaan==</option>
                                                @foreach ($kategori as $item)
                                                    <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
            
                                            @if ($errors->has('kategori_pembiayaan'))
                                                <div class="text-danger">
                                                    {{ $errors->first('kategori_pembiayaan') }}
                                                </div>
                                            @endif
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Kategori Pembiayaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nasabah as $n)
                            <tr>
                                <td>{{ $n->id }}</td>
                                <td>{{ $n->nama }}</td>
                                <td>{{ $n->created_at }}</td>
                                <td>{{ $n->kategori_pembiayaan }}</td>
                                <td>
                                    <form action="{{ route('nasabah.destroy',$n->id) }}" method="Post">
                                        <a class="btn btn-primary" href="/nasabah-edit/{{ $n->id }}">Edit</a>
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Kategori Pembiayaan</th>
                                    <th>Action</th>
                                </tr>
                            </tr>
                        </tfoot>
                    </table>
            </div>
            </div>
        </div>      
    </div>
@endsection