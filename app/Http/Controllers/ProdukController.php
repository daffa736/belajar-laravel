<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    private function dataProduk()
    {
        return [
            ['nama_produk' => 'Asus', 'harga' => 2500000],
            ['nama_produk' => 'Magicom', 'harga' => 250000],
            ['nama_produk' => 'Kulkas', 'harga' => 3000000],
        ];
    }

    public function index(){
        $produks = $this->dataProduk();

        return view('produk.index',compact('produks'));
    }

    public function show($id){
        $produks = $this->dataProduk();

        $produk = $produks[$id];

        return view('produk.show',compact('produk'));
    }
}
