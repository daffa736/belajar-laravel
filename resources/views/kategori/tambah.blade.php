@extends('layouts.app')
@section('content')

<h3 class="text-center mt-4">Ubah Kategori</h3>
<div class="container mt-4 text-center card  border-0 gap-2" style="width: 18rem;">
    <form action="{{ route('kategori.store') }}" method="post">
        @csrf
    
    <input type="text" name="nama_kategori" placeholder="masukan nama kategori...." required>
    <!-- <input type="text" placeholder="masukan nama kategori...."> -->
    <button class="btn btn-secondary py-6">Ubah</button>
    </form>
</div>
@endsection