<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();

        dd($produk);
    }

    public function create(){
        // Tampilkan formulir untuk menambah produk baru
        $kategori =  Kategori::all();
        return view('admin.addproduk',[
            'kategori' => $kategori
        ]);
    }

    public function store(Request $request){
        $produk = Produk::create($request->all());

        return redirect()->route('admin.home')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id){
        $produk = Produk::findOrFail($id);
        $getKategori =  Kategori::all();
        return view('admin.updateproduk',[
            'produk' => $produk,
            'kategori' => $getKategori
        ]);

        
    }

    public function update(Request $request,$id){
        $produk = Produk::findOrFail($id);

        // Update data produk
        $produk->update($request->all());

        // Redirect ke halaman daftar produk dengan pesan sukses
        return redirect()->route('admin.home')->with('success', 'Produk berhasil diperbarui!');
    }

    public function delete($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus');
    }
}
