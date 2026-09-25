@extends('layouts.app')
@section('content')
<h3 class="text-center mt-4">Daftar Kategori</h3>
<div class="container mt-4">
<table  class="table table-hover table-bordered border-4 text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $kategori as $key => $kategoris )
        <tr>
            <td>{{ $key }}</td>
            <td>{{$kategoris['nama_kategori'] }}</td>
            <td><a href="{{ route('#', $key) }}">Lihat Detail</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection