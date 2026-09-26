@extends('layouts.app')
@section('content')

<h3 class="text-center mt-4">Ubah Kategori</h3>
<div class="container mt-4 text-center card  border-0 gap-2" style="width: 18rem;">
    <form action="{{ route('kategori.update', $id) }}" method="post">
        @csrf
        @method('put')
    <input type="text" value="{{ $kategoris['nama_kategori'] }}">
    <button class="btn btn-secondary py-6">Ubah</button>
    </form>
</div>
@endsection