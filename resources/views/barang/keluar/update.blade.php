@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('barang-keluar.update') }}" method="POST">
            @csrf
            @foreach($barangkeluar as $bk)
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input type="text" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Id" value="{{ $bk->id }}" readonly>
            </div>
            @endforeach
            <div class="form-group">
                <label for="validationCustom02" class="col-sm-2 col-form-label">Nama Barang</label>
                <select name="nama_barang" id="nama_barang" class="custom-select mb-3">
                    @foreach ($barangmasuk as $item)
                        <option value="{{ $item->nama_barang }}">{{ $item->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="validationCustom02" class="col-sm-2 col-form-label">Nama Peminjam</label>
                <select name="nama_peminjam" id="nama_peminjam" class="custom-select mb-3">
                    @foreach ($ops as $item)
                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="validationCustom02" class="col-sm-2 col-form-label">Jabatan Peminjam</label>
                <select name="jabatan_peminjam" id="jabatan_peminjam" class="custom-select mb-3">
                    @foreach ($ops as $item)
                        <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="validationCustom02" class="col-sm-2 col-form-label">Kategori</label>
                <select name="kategori" id="kategori" class="custom-select mb-3">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Stok Keluar</label>
                <input type="text" class="form-control" id="stok_keluar" name="stok_keluar" placeholder="Stok masuk" value="{{ $bk->stok_keluar }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
@endsection