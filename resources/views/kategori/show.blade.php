 @extends('layouts.app')
 @section('content')
 <div class="container mt-4 text-center">
 <div class="card shadow-lg rounded border-0 mx-auto text-center"
   style="max-width: 700px;">
   <h3 class="mt-4">Detail Kategori</h3><br>
   
   Nama Kategori: {{ $kategoris['nama_kategori'] }} <br>
 
 
   <button class="btn btn-dark mx-auto my-4 " style="width: 200px;"><a href="{{ route('kategori.index') }}" class="text-decoration-none text-light">kembali</a></button> 
  </div>
 </div>
 @endsection