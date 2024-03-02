@extends('layout.main')
{{-- @dd($data) --}}

@section('container')
   <div>
    <table>
        <thead>
            @foreach ($data as $item)
            <tr>
                <th>{{ $item->tgl_periksa }}</th>
                <th>{{ $item->pasien_id }}</th>
                <th>{{ $item->dokter->dokter_nama }}</th>
            </tr>
            @endforeach
           
        </thead>
        <tbody>

        </tbody>
    </table>
   </div>
@endsection