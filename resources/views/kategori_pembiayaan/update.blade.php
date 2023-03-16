@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('kategori-pembiayaan.update') }}" method="POST">
            @csrf
            @foreach($kategori as $k)
            <div class="form-group">
              <label for="exampleInputEmail1">Id</label>
              <input type="text" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Id" value="{{ $k->id }}" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Kategori</label>
              <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="{{ $k->kategori }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            @endforeach
          </form>
        </div>
@endsection