@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('ops.update') }}" method="POST">
            @csrf
            @foreach($ops as $o)
            <div class="form-group">
              <label for="exampleInputEmail1">Id</label>
              <input type="text" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Id" value="{{ $o->id }}" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $o->nama }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="{{ $o->jabatan }}">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            @endforeach
          </form>
        </div>
@endsection