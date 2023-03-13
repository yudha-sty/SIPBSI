@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Barang Keluar</h6>
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

    <!-- Modal -->
    <div class="modal fade" id="modalbarangmasuk" tabindex="-1" role="dialog" aria-labelledby="modalbarangmasuk" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                      <label for="Nama Barang" class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Barang" class="col-sm-2 col-form-label">Nama Pengirim</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Nama Barang" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
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
                                <th>Jabatan Pengirim</th>
                                <th>Kategori</th>
                                <th>Stok Masuk</th>
                                <th>Stok Total</th>
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
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Nama Pengirim</th>
                                    <th>Jabatan Pengirim</th>
                                    <th>Kategori</th>
                                    <th>Stok Masuk</th>
                                    <th>Stok Total</th>
                                </tr>
                            </tr>
                        </tfoot>
                    </table>
            </div>
            </div>
        </div>      
    </div>
@endsection