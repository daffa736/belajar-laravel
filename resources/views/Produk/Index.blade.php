@extends('layouts.app')
@section('content')
<h3 class="text-center my-4">Daftar Produk</h3>
<div class="container mt-4 ">
    <table class=" table table-hover table-bordered border-4 text-center">
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
                <td> Rp{{ number_format( $produk['harga']) }}</td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        <a href="{{ route('produk.show', $key) }}" class="text-decoration-none text-light">Lihat Detail</a>
                    </button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection