@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('barang-masuk.update') }}" method="POST">
            @csrf
            @foreach($barangmasuk as $bm)
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input type="text" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Id" value="{{ $bm->id }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" value="{{ $bm->nama_barang }}">
            </div>
            @endforeach
            <div class="form-group">
                <label for="validationCustom02" class="col-sm-2 col-form-label">Nama Pengirim</label>
                <select name="nama_pengirim" id="nama_pengirim" class="custom-select mb-3">
                    @foreach ($ops as $item)
                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="validationCustom02" class="col-sm-2 col-form-label">Jabatan Pengirim</label>
                <select name="jabatan_pengirim" id="jabatan_pengirim" class="custom-select mb-3">
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
                <label for="exampleInputPassword1">Stok Masuk</label>
                <input type="number" class="form-control" id="stok_masuk" name="stok_masuk" placeholder="Stok masuk" value="{{ $bm->stok_masuk }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
@endsection