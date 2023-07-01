<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index(){
        $kategori = kategori::get();

        return view('kategori/index', ['kategori'=> $kategori]);
    }

    public function tambah(){
        return view('kategori.form');
    }
    public function edit($id){
        $kategori = Kategori::find($id);
        return view('kategori.form',['kategori'=>$kategori]);
    }

    public function simpan(Request $request){
        Kategori::create(['nama' => $request->nama]);
        return redirect()->route('kategori');
    }

    public function update($id, Request $request){
        Kategori::find($id)->update(['nama' => $request->nama]);
        return redirect()->route('kategori');
    }
}
