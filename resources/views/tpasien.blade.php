@extends('layout.main')
{{-- @dd($data) --}}

@section('container')
<a href="{{ url('pasien/create', []) }}">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">pasien_id</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col" colspan="2">sction</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">PS-00{{ $item->id}}</th>
            <td>{{ $item->pasien_nama}}</td>
            <td>{{ $item->jenis_kelamin}}</td>
            <td><a href="{{ url('pasien/'.$item->id.'/edit', []) }}">edit</a></td>
            <form action="{{ url('pasien', $item->id) }}" method="post">
            @csrf
            @method("DELETE")
                <td><button type="submit">hapus</button></td>
            </form>
           
          </tr>
            
        @endforeach
      
      
    </tbody>
  </table>
@endsection
