<?php
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
                    <h6 class="m-0 font-weight-bold text-primary">Data Operasional</h6>
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
                                    <form action="{{ route('ops.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                            </div>
                                            @if ($errors->has('nama'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama') }}
                                            </div>
                                        @endif
                                        </div> 
                                        <div class="form-group row">
                                            <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                                            </div>
                                            @if ($errors->has('jabatan'))
                                            <div class="text-danger">
                                                {{ $errors->first('jabatan') }}
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
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ops as $o)
                            <tr>
                                <td>{{ $o->id }}</td>
                                <td>{{ $o->nama }}</td>
                                <td>{{ $o->jabatan }}</td>
                                <td>
                                    <form action="{{ route('ops.destroy',$o->id) }}" method="Post">
                                        <a class="btn btn-primary" href="/ops-edit/{{ $o->id }}">Edit</a>
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
                                    <th>Jabatan</th>
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