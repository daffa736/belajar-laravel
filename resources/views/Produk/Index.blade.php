@extends('layouts.app')
@section('content')
<h3 class="text-center">daftar produk</h3>
<table  class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $produks as $key => $produk )
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $produk['nama_produk'] }}</td>
            <td>{{ number_format( $produk['harga']) }}</td>
            <td><a href="{{ route('produk.show', $key) }}">Lihat Detail</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection