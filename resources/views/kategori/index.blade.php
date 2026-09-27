@extends('layouts.app')
@section('content')
@if (session('berhasil'))
    <script>
        alert("{{ session('berhasil') }}");
    </script>


@endif
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
            <td>

                <a href="{{ route('kategori.show', $key) }}" class="btn btn-primary">Lihat Detail </a>
                |
                <a href="{{ route('kategori.edit', $key) }}" class="btn btn-primary">Edit </a>
                |
                <form action="{{ route('kategori.destroy', $key) }}" method="post" style="display: inline;">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"> Hapus </button>
                </form>
        </td>
        </tr>
        @endforeach

    </tbody>
</table>
<button class="btn btn-info"><a href="{{ route('kategori.create') }}"  class= " text-decoration-none text-light">Tambah Kategori</a></button>
</div>
@endsection