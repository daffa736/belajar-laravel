<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private function DaftarKategori(){
        return [
            ['nama_kategori' => 'Handphone'],
            ['nama_kategori' => 'Computer'],
            ['nama_kategori' => 'Laptop'],
        ];
    }
    public function index()
    {
        $kategori = $this->DaftarKategori();

        return view('kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = $this->DaftarKategori();

        $kategoris = $kategori[$id];

        return view('kategori.edit',compact('kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
