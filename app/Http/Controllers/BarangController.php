<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::get();
        return view('barang.index', ['barang' => $barang]);
    }

    public function tambah(){

        return view('barang.form');
    }

    public function simpan(Request $request){
        $data = [
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'kategori_barang' => $request->kategori_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        Barang::create($data);

        return redirect()->route('barang');
    }

    public function edit($id){
            $barang = Barang::find($id);

            return view('barang.form',['barang' => $barang]);
    }

    public function update($id, Request $request){
        $data = [
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'kategori_barang' => $request->kategori_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        $barang = Barang::find($id)->update($data);

        return redirect()->route('barang');
    }
}
