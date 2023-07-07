<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proposal;
use App\Models\bab1;
use App\Models\bab2;
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
        $dataBab2 =[];
        $dataBab3 =[];
        $dataBab4 =[];
        $LastidBab1 = bab1::create($dataBab1);
        $LastidBab2 = bab2::create($dataBab1);
        $LastidBab1Id = $LastidBab1->id;
        $LastidBab2Id = $LastidBab2->id;
        
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
            'id_bab2' => $LastidBab2Id,
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

        $file_scan_sk_akreditasi_prodi_mitra = $request->hasFile('scan_sk_akreditasi_prodi_mitra');
        $filename_scan_sk_akreditasi_prodi_mitra = $request->scan_sk_akreditasi_prodi_mitra_hidden;

        $file_scan_ijin_operasional_prodi = $request->hasFile('scan_ijin_operasional_prodi');
        $filename_scan_ijin_operasional_prodi = $request->scan_ijin_operasional_prodi_hidden;

        $file_scan_ijin_operasional_prodi_mitra = $request->hasFile('scan_ijin_operasional_prodi_mitra');
        $filename_scan_ijin_operasional_prodi_mitra = $request->scan_ijin_operasional_prodi_mitra_hidden;

        $file_proposal_usulan_kerjsama = $request->hasFile('proposal_usulan_kerjsama');
        $filename_proposal_usulan_kerjsama = $request->proposal_usulan_kerjsama_hidden;

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
        if($file_scan_sk_akreditasi_prodi_mitra){
            $filename_scan_sk_akreditasi_prodi_mitra = '/file/' . time() . '_scan_sk_akreditasi_prodi_mitra.' . $request->scan_sk_akreditasi_prodi_mitra->extension(); 
            $request->scan_sk_akreditasi_prodi_mitra->move(public_path('/file/'),$filename_scan_sk_akreditasi_prodi_mitra);
        }
        if($file_scan_ijin_operasional_prodi){
            $filename_scan_ijin_operasional_prodi = '/file/' . time() . '_scan_ijin_operasional_prodi.' . $request->scan_ijin_operasional_prodi->extension(); 
            $request->scan_ijin_operasional_prodi->move(public_path('/file/'),$filename_scan_ijin_operasional_prodi);
        }
        if($file_scan_ijin_operasional_prodi_mitra){
            $filename_scan_ijin_operasional_prodi_mitra = '/file/' . time() . '_scan_ijin_operasional_prodi_mitra.' . $request->scan_ijin_operasional_prodi_mitra->extension(); 
            $request->scan_ijin_operasional_prodi_mitra->move(public_path('/file/'),$filename_scan_ijin_operasional_prodi_mitra);
        }
        if($file_proposal_usulan_kerjsama){
            $filename_proposal_usulan_kerjsama = '/file/' . time() . '_proposal_usulan_kerjsama.' . $request->proposal_usulan_kerjsama->extension(); 
            $request->proposal_usulan_kerjsama->move(public_path('/file/'),$filename_proposal_usulan_kerjsama);
        }

        $data = [
        'alamat_pt' => $request->alamat_pt,
        'nama_pt_mitra' =>$request->nama_pt_mitra,
        'alamat_pt_mitra' =>$request->alamat_pt_mitra,
        'id_negara_mitra' =>$request->id_negara_mitra,
        'id_status_akreditasi_institusi' => $request->id_status_akreditasi_institusi,
        'id_status_akreditasi_institusi_mitra' => $request->id_status_akreditasi_institusi_mitra,
        'id_akreditasi_prodi' => $request->id_akreditasi_prodi,
        'id_akreditasi_prodi_mitra' => $request->id_akreditasi_prodi_mitra,
        'ijin_operasional_pt_mitra' => $request->ijin_operasional_pt_mitra,
        'ijin_operasional_pt' => $request->ijin_operasional_pt,
        'peringkat_internasional_mitra' => $request->peringkat_internasional_mitra,
        'nama_prodi' => $request->nama_prodi,
        'nama_prodi_mitra' => $request->nama_prodi_mitra,

        'scan_ijin_operasional_pt' => $filename_scan_ijin_operasional_pt, 
        'scan_status_akreditasi_institusi' => $filename_scan_status_akreditasi_institusi,
        'scan_ijin_operasional_pt_mitra' => $filename_scan_ijin_operasional_pt_mitra,
        'scan_status_akreditasi_institusi_mitra' => $filename_scan_status_akreditasi_institusi_mitra,
        'scan_sk_akreditasi_prodi' => $filename_scan_sk_akreditasi_prodi,
        'scan_sk_akreditasi_prodi_mitra' => $filename_scan_sk_akreditasi_prodi_mitra,
        'scan_ijin_operasional_prodi' => $filename_scan_ijin_operasional_prodi,
        'scan_ijin_operasional_prodi_mitra' => $filename_scan_ijin_operasional_prodi_mitra,
        'proposal_usulan_kerjsama' => $filename_proposal_usulan_kerjsama] ;

        bab1::find($id_bab1)->update($data);
        //dd($request->all());

        return redirect()->route('proposal');
    }

    public function editbab2($id){

        $proposal = proposal::find($id);
        $bab2 = bab2::find($proposal->id_bab2);


        return view('proposal.edit.bab2', ['proposal' => $proposal, 'bab2' => $bab2]);
    }
    public function updateBab2($id, Request $request){

        $id_proposal = $request->idProposal;
        $id_bab2 = $request->idBab2;

        $file_file_mou = $request->hasFile('file_mou');
        $filename_file_mou = $request->file_mou_hidden;

        $file_file_moa = $request->hasFile('file_moa');
        $filename_file_moa = $request->file_moa_hidden;

        if($file_file_mou){
            $filename_file_mou = '/file/' . time() . '_file_mou.' . $request->file_mou->extension(); 
            $request->file_mou->move(public_path('/file/'),$filename_file_mou);
        }
        if($file_file_moa){
            $filename_file_moa = '/file/' . time() . '_file_moa.' . $request->file_moa->extension(); 
            $request->file_moa->move(public_path('/file/'),$filename_file_moa);
        }

        $data = ['ringkasan_mou' => $request->ringkasan_mou, 'file_mou' => $filename_file_mou , 'no_moa' => $request->no_moa,
        'deskripsi_singkat_moa' => $request->deskripsi_singkat_moa, 'tanggal_dimulai_moa'=> $request->tanggal_dimulai_moa ,
        'tanggal_berakhir_moa' => $request->tanggal_berakhir_moa, 'file_moa' => $filename_file_moa ,'misi_program_kerjasama'=>$request->misi_program_kerjasama, 
        'target_program_kerjasama' => $request->target_program_kerjasama, 'alasan_pemilihan_mitra' => $request->alasan_pemilihan_mitra,
        'prinsip_kerjasama' => $request->prinsip_kerjasama, 'manfaat_kerjasama' => $request->manfaat_kerjasama, 
        'tantangan_pelaksanaan_kerjasama' => $request->tantangan_pelaksanaan_kerjasama, 'kepemilikan_hak_cipta_paten' => $request->kepemilikan_hak_cipta_paten,
        'mekanisme_resiprokal' => $request->mekanisme_resiprokal, 'keberlanjutan_kerjsama' => $request->keberlanjutan_kerjsama,
        'hak_dan_kewajiban' => $request->hak_dan_kewajiban, 'hak_tercantum' => $request['hak_tercantum']];
        

        bab2::find($id_bab2)->update($data);
    
        return redirect()->route('proposal');
    }

    public function editbab3($id){
        $proposal = proposal::find($id);
        //echo $proposal->id;
        return view('proposal.edit.bab3', ['proposal' => $proposal]);
    }

    public function editbab4($id){
        $proposal = proposal::find($id);
        //echo $proposal->id;
        return view('proposal.edit.bab4', ['proposal' => $proposal]);
    }
}
