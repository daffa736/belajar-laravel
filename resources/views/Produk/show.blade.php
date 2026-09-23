 @extends('layouts.app')
 @section('content')
 <div class="card shadow-lg rounded border-0 mx-auto text-center "
        style="max-width: 700px;">
 <h1>detail produk</h1>

 
   Nama Produk:{{ $produk['nama_produk'] }} <br>
   Harga:{{ number_format($produk['harga']) }}</li>
 

 <a href="{{ route('produk.index') }}">kembali</a>
 </div>
 @endsection