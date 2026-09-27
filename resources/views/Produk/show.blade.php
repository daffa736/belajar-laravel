 @extends('layouts.app')
 @section('content')
 <div class="container mt-4 text-center">
 <div class="card shadow-lg rounded border-0 mx-auto text-center"
   style="max-width: 700px;">
   <h3 class="mt-4">Detail Produk</h3><br>
   
   Nama Produk: {{ $produk['nama_produk'] }} <br>
   Harga: Rp {{ number_format($produk['harga']) }}</li><br><br>
 
   <button class="btn btn-dark mx-auto mb-4" style="width: 200px;"><a href="{{ route('produk.index') }}" class="text-decoration-none text-light">kembali</a></button> 
  </div>
 </div>
 @endsection