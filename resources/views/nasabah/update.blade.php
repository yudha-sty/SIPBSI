@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('nasabah.update') }}" method="POST">
            @csrf
            @foreach($nasabah as $n)
            <div class="form-group">
              <label for="exampleInputEmail1">Id</label>
              <input type="text" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Id" value="{{ $n->id }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="Nama" value="{{ $n->nama }}">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Total Pembiayaan</label>
              <input type="text" class="form-control" id="total_pembiayaan" name="total_pembiayaan" placeholder="Total Pembiayaan" value="{{ $n->total_pembiayaan }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" value="{{ $n->keterangan }}">
              </div>

              <div class="form-group row">
                <label for="validationCustom02" class="col-sm-2 col-form-label">Kategori Pembiayaan</label>
                <select name="kategori_pembiayaan" id="kategori_pembiayaan" class="custom-select mb-3">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            @endforeach
          </form>
        </div>
@endsection