@extends('layout.main')


@section('container')
<form action="{{ url('pasien/'.$data->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="pasien_nama" value="{{ $data->pasien_nama }}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="jenis" value="{{ $data->jenis_kelamin }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
