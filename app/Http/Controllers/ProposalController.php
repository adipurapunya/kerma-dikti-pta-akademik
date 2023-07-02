<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proposal;
use App\Models\bab1;
use Carbon\Carbon;

class ProposalController extends Controller
{
    public function index(){
        $proposal = proposal::get();
        return view('proposal.index', ['proposal' => $proposal]);
        //return view('proposal.index');

        //$barang = Barang::get();
        //return view('barang.index', ['barang' => $barang]);
    }

    public function tambah(){

        $proposal = proposal::get();
        //return view('barang.form',['kategori' => $kategori]);
    }

    public function simpan(Request $request){
        
        $dataBab1 =[];
        $LastidBab1 = bab1::create($dataBab1);
        $LastidBab1Id = $LastidBab1->id;
        
        $data = [
            'nama_universitas' => $request->nama_universitas,
            'pt_mitra_negeri' => $request->pt_mitra_negeri,
            'prodi_pt_dalam_negeri' => $request->prodi_pt_dalam_negeri,
            'prodi_pt_mitra_negeri' => $request->prodi_pt_mitra_negeri,
            'id_jenis_kerjasama' => $request->id_jenis_kerjasama,
            'judul' => $request->judul,
            'tanggal_pengajuan' => Carbon::now(),
            'status_pengisian' => 'Belum Lengkap',
            'status_berkas' => 'Draf',
            'id_bab1' => $LastidBab1Id,
        ];

        proposal::create($data);
    
        //echo $Lastid;

        return redirect()->route('proposal');
    }

    public function viewbab1(){

        //$proposal = proposal::get();
        return view('proposal.view.viewBab1');
    }

    public function editbab1(){

        //$proposal = proposal::get();
        return view('proposal.edit.bab1');
    }

    public function editbab2(){

        //$proposal = proposal::get();
        return view('proposal.edit.bab2');
    }

    public function editbab3(){

        //$proposal = proposal::get();
        return view('proposal.edit.bab3');
    }

    public function editbab4(){

        //$proposal = proposal::get();
        return view('proposal.edit.bab4');
    }
}
