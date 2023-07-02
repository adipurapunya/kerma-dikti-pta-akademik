<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proposal;
use App\Models\bab1;
use App\Models\statusAkreditasi;
use App\Models\negara;
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
        
        return redirect()->route('proposal');
    }

    public function viewbab1(){

        //$proposal = proposal::get();
        return view('proposal.view.viewBab1');
    }

    public function editbab1($id){

        $proposal = proposal::find($id);
        $statusAkreditasi = statusAkreditasi::get();
        $negara = negara::get();
        $bab1 = bab1::find($proposal->id_bab1);
        
        return view('proposal.edit.bab1', ['proposal' => $proposal, 'bab1' => $bab1, 'statusAkreditasi' => $statusAkreditasi, 'negara' => $negara]);
    }

    public function updateBab1($id, Request $request){
        
        $id_proposal = $request->idProposal;
        $id_bab1 = $request->idBab1;
       
        //$filename_scan_ijin_operasional_pt = $request->getSchemeAndHttpHost().'/file/' . time() . '.' . $request->scan_ijin_operasional_pt->extension(); 
            
        $file_scan_ijin_operasional_pt = $request->hasFile('scan_ijin_operasional_pt');
        $filename_scan_ijin_operasional_pt= $request->scan_ijin_operasional_pt_hidden;
        
        $file_scan_status_akreditasi_institusi = $request->hasFile('scan_status_akreditasi_institusi');
        $filename_scan_status_akreditasi_institusi = $request->scan_status_akreditasi_institusi_hidden;

        $file_scan_ijin_operasional_pt_mitra = $request->hasFile('scan_ijin_operasional_pt_mitra');
        $filename_scan_ijin_operasional_pt_mitra = $request->scan_ijin_operasional_pt_mitra_hidden;

        $file_scan_status_akreditasi_institusi_mitra = $request->hasFile('scan_status_akreditasi_institusi_mitra');
        $filename_scan_status_akreditasi_institusi_mitra = $request->scan_status_akreditasi_institusi_mitra_hidden;

        $file_scan_sk_akreditasi_prodi = $request->hasFile('scan_sk_akreditasi_prodi');
        $filename_scan_sk_akreditasi_prodi = $request->scan_sk_akreditasi_prodi_hidden;

        if($file_scan_ijin_operasional_pt){
            $filename_scan_ijin_operasional_pt = '/file/' . time() . '_scan_ijin_operasional_pt.' . $request->scan_ijin_operasional_pt->extension(); 
            $request->scan_ijin_operasional_pt->move(public_path('/file/'),$filename_scan_ijin_operasional_pt);
        }
        if($file_scan_status_akreditasi_institusi){
            $filename_scan_status_akreditasi_institusi = '/file/' . time() . '_scan_status_akreditasi_institusi.' . $request->scan_status_akreditasi_institusi->extension(); 
            $request->scan_status_akreditasi_institusi->move(public_path('/file/'),$filename_scan_status_akreditasi_institusi);
        }
        if($file_scan_ijin_operasional_pt_mitra){
            $filename_scan_ijin_operasional_pt_mitra = '/file/' . time() . '_scan_ijin_operasional_pt_mitra.' . $request->scan_ijin_operasional_pt_mitra->extension(); 
            $request->scan_ijin_operasional_pt_mitra->move(public_path('/file/'),$filename_scan_ijin_operasional_pt_mitra);
        }
        if($file_scan_status_akreditasi_institusi_mitra){
            $filename_scan_status_akreditasi_institusi_mitra = '/file/' . time() . '_scan_status_akreditasi_institusi_mitra.' . $request->scan_status_akreditasi_institusi_mitra->extension(); 
            $request->scan_status_akreditasi_institusi_mitra->move(public_path('/file/'),$filename_scan_status_akreditasi_institusi_mitra);
        }
        if($file_scan_sk_akreditasi_prodi){
            $filename_scan_sk_akreditasi_prodi = '/file/' . time() . '_scan_sk_akreditasi_prodi.' . $request->scan_sk_akreditasi_prodi->extension(); 
            $request->scan_sk_akreditasi_prodi->move(public_path('/file/'),$filename_scan_sk_akreditasi_prodi);
        }

        $data = ['scan_ijin_operasional_pt' => $filename_scan_ijin_operasional_pt, 
        'scan_status_akreditasi_institusi' => $filename_scan_status_akreditasi_institusi,
        'scan_ijin_operasional_pt_mitra' => $filename_scan_ijin_operasional_pt_mitra,
        'scan_status_akreditasi_institusi_mitra' => $filename_scan_status_akreditasi_institusi_mitra,
        'scan_sk_akreditasi_prodi' => $filename_scan_sk_akreditasi_prodi] ;

        bab1::find($id_bab1)->update($data);
        //dd($request->all());

        return redirect()->route('proposal');
    }

    /*
    public function edit($id){
        $barang = Barang::find($id);
        $kategori = Kategori::get();

        return view('barang.form',['barang' => $barang, 'kategori'=>$kategori]);
    }
    */

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
