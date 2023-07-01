<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::get();
        return view('barang.index', ['barang' => $barang]);
    }

    public function tambah(){

        $kategori = Kategori::get();
        return view('barang.form',['kategori' => $kategori]);
    }

    public function simpan(Request $request){
        $data = [
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        Barang::create($data);

        return redirect()->route('barang');
    }

    public function edit($id){
            $barang = Barang::find($id);
            $kategori = Kategori::get();

            return view('barang.form',['barang' => $barang, 'kategori'=>$kategori]);
    }

    public function update($id, Request $request){
        $data = [
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        $barang = Barang::find($id)->update($data);

        return redirect()->route('barang');
    }

    public function hapus($id){
        Barang::find($id)->delete();
        return redirect()->route('barang');
    }
}
