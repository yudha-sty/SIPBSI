@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card-body">
        <form>
            @csrf
            @foreach($kategori as $k)

            <div class="col-sm-10">
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="{{ $k->kategori }}">
            </div>
            </div>
            @endforeach 
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
</form>
    </div>
@endsection