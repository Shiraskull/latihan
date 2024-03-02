@extends('layout.main')

@section('container')
    <div class="w-25 m-auto border border-dark mt-5 ">
        <h1 class="text-center bg-primary text-white p-3">MENU</h1>
        <a href="{{ url('pasien') }}"><div class="px-3">Data Pasien</div></a>
        <div class="px-3">Data Dokter</div>
        <div class="px-3">Data Poli</div>
    </div>
@endsection