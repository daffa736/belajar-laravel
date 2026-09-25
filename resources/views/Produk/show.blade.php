 @extends('layouts.app')
 @section('content')
 <div class="container mt-4">
 <div class="card shadow-lg rounded border-0 mx-auto text-center"
   style="max-width: 700px;">
   <h3>detail produk</h3><br>
   
   Nama Produk: {{ $produk['nama_produk'] }} <br>
   Harga: {{ number_format($produk['harga']) }}</li><br><br>
 
   <a href="{{ route('produk.index') }}">kembali</a>
 </div>
 </div>
 @endsection