<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\proposal;
use App\Models\User;
use App\Models\bab1;
use App\Models\bab2;
use App\Models\bab3;
use App\Models\bab4;
use App\Models\statusAkreditasi;
use App\Models\kerjasama;
use App\Models\negara;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProposalController extends Controller
{
    
    public function index(){
        //$proposal = proposal::get();
        $idUniv = auth()->user()->id_universitas;
        $proposal = proposal::where('id_universitas', $idUniv)->orderBy('id','DESC')->paginate(5);
        //User::where('username', 'bobbyiliev')->get();
        //dd(compact('proposal'));
        $kerjasama = kerjasama::get();
        
        return view('proposal.index', ['proposal' => $proposal, 'kerjasama' => $kerjasama, 'lastPagination' => 5]);
    }

    public function showPaginationAjax($id){

        $idUniv = auth()->user()->id_universitas;
        $proposal = proposal::where('id_universitas', $idUniv)->orderBy('id','DESC')->paginate($id);
        $kerjasama = kerjasama::get();
        
        return view('proposal.index', ['proposal' => $proposal, 'kerjasama' => $kerjasama, 'lastPagination' => $id]);
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
        $LastidBab2 = bab2::create($dataBab2);
        $LastidBab3 = bab3::create($dataBab3);
        $LastidBab4 = bab4::create($dataBab4);

        $LastidBab1Id = $LastidBab1->id;
        $LastidBab2Id = $LastidBab2->id;
        $LastidBab3Id = $LastidBab3->id;
        $LastidBab4Id = $LastidBab4->id;
        
        $data = [
            'id_universitas' => auth()->user()->id_universitas,
            'pt_mitra_negeri' => $request->pt_mitra_negeri,
            'prodi_pt_dalam_negeri' => $request->prodi_pt_dalam_negeri,
            'prodi_pt_mitra_negeri' => $request->prodi_pt_mitra_negeri,
            'id_jenis_kerjasama' => $request->id_jenis_kerjasama,
            'judul' => $request->judul,
            'tanggal_pengajuan' => Carbon::now(),
            'status_pengisian' => 'Belum Lengkap',
            'id_status_berkas' => 5,
            'id_bab1' => $LastidBab1Id,
            'id_bab2' => $LastidBab2Id,
            'id_bab3' => $LastidBab3Id,
            'id_bab4' => $LastidBab4Id
        ];

        //dd($data);

        proposal::create($data);

        Alert::success('Proposal baru telah berhasil ditambahkan', 'silahkan diisi datanya dengan mengklik menu edit');
        
        return redirect()->route('proposal');
    }

    public function viewbab1($id){
        $proposal = proposal::find(decrypt($id));
        $statusAkreditasi = statusAkreditasi::get();
        $negara = negara::get();
        $bab1 = bab1::find($proposal->id_bab1);
        
        return view('proposal.view.viewBab1', ['proposal' => $proposal, 'bab1' => $bab1, 'statusAkreditasi' => $statusAkreditasi, 'negara' => $negara]);
    }

    public function viewbab2($id){
        $proposal = proposal::find(decrypt($id));
        $bab2 = bab2::find($proposal->id_bab2);
    
        return view('proposal.view.viewBab2', ['proposal' => $proposal, 'bab2' => $bab2]);
    }

    public function viewbab3($id){
        $proposal = proposal::find(decrypt($id));
        $bab3 = bab3::find($proposal->id_bab3);
        
        return view('proposal.view.viewBab3', ['proposal' => $proposal, 'bab3' => $bab3]);
    }

    public function viewbab4($id){
        $proposal = proposal::find(decrypt($id));
        $bab4 = bab4::find($proposal->id_bab4);
        $kerjasama = kerjasama::get();

        return view('proposal.view.viewBab4', ['proposal' => $proposal, 'bab4' => $bab4, 'kerjasama' => $kerjasama]);
    }

    

    public function editbab1($id){

        $proposal = proposal::find(decrypt($id));
        $statusAkreditasi = statusAkreditasi::get();
        $negara = negara::get();
        $bab1 = bab1::find($proposal->id_bab1);
        
        return view('proposal.edit.bab1', ['proposal' => $proposal, 'bab1' => $bab1, 'statusAkreditasi' => $statusAkreditasi, 'negara' => $negara]);
    }

    public function updateBab1(Request $request){
        
        $path_global = public_path('/file/');
        //$path_global = '/home/athifa01/public_html/ijinkerma/file/';
        
        $id_proposal = decrypt($request->idProposal);
        $id_bab1 = decrypt($request->idBab1);

        //dd(public_path());
       
        $validator = $request->validate([
            'scan_ijin_operasional_pt' => 'mimes:pdf|max:2048',
            'scan_status_akreditasi_institusi' => 'mimes:pdf|max:2048',
            'scan_ijin_operasional_pt_mitra' => 'mimes:pdf|max:2048',
            'scan_status_akreditasi_institusi_mitra' => 'mimes:pdf|max:2048',
            'scan_sk_akreditasi_prodi' => 'mimes:pdf|max:2048',
            'scan_sk_akreditasi_prodi_mitra' => 'mimes:pdf|max:2048',
            'scan_ijin_operasional_prodi' => 'mimes:pdf|max:2048',
            'scan_ijin_operasional_prodi_mitra' => 'mimes:pdf|max:2048',
            'proposal_usulan_kerjsama' => 'mimes:pdf|max:20480'
        ]);
     
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
            $request->scan_ijin_operasional_pt->move($path_global, $filename_scan_ijin_operasional_pt);
        }
        if($file_scan_status_akreditasi_institusi){
            $filename_scan_status_akreditasi_institusi = '/file/' . time() . '_scan_status_akreditasi_institusi.' . $request->scan_status_akreditasi_institusi->extension(); 
            $request->scan_status_akreditasi_institusi->move($path_global, $filename_scan_status_akreditasi_institusi);
        }
        if($file_scan_ijin_operasional_pt_mitra){
            $filename_scan_ijin_operasional_pt_mitra = '/file/' . time() . '_scan_ijin_operasional_pt_mitra.' . $request->scan_ijin_operasional_pt_mitra->extension(); 
            $request->scan_ijin_operasional_pt_mitra->move($path_global, $filename_scan_ijin_operasional_pt_mitra);
        }
        if($file_scan_status_akreditasi_institusi_mitra){
            $filename_scan_status_akreditasi_institusi_mitra = '/file/' . time() . '_scan_status_akreditasi_institusi_mitra.' . $request->scan_status_akreditasi_institusi_mitra->extension(); 
            $request->scan_status_akreditasi_institusi_mitra->move($path_global, $filename_scan_status_akreditasi_institusi_mitra);
        }
        if($file_scan_sk_akreditasi_prodi){
            $filename_scan_sk_akreditasi_prodi = '/file/' . time() . '_scan_sk_akreditasi_prodi.' . $request->scan_sk_akreditasi_prodi->extension(); 
            $request->scan_sk_akreditasi_prodi->move($path_global, $filename_scan_sk_akreditasi_prodi);
        }
        if($file_scan_sk_akreditasi_prodi_mitra){
            $filename_scan_sk_akreditasi_prodi_mitra = '/file/' . time() . '_scan_sk_akreditasi_prodi_mitra.' . $request->scan_sk_akreditasi_prodi_mitra->extension(); 
            $request->scan_sk_akreditasi_prodi_mitra->move($path_global, $filename_scan_sk_akreditasi_prodi_mitra);
        }
        if($file_scan_ijin_operasional_prodi){
            $filename_scan_ijin_operasional_prodi = '/file/' . time() . '_scan_ijin_operasional_prodi.' . $request->scan_ijin_operasional_prodi->extension(); 
            $request->scan_ijin_operasional_prodi->move($path_global, $filename_scan_ijin_operasional_prodi);
        }
        if($file_scan_ijin_operasional_prodi_mitra){
            $filename_scan_ijin_operasional_prodi_mitra = '/file/' . time() . '_scan_ijin_operasional_prodi_mitra.' . $request->scan_ijin_operasional_prodi_mitra->extension(); 
            $request->scan_ijin_operasional_prodi_mitra->move($path_global, $filename_scan_ijin_operasional_prodi_mitra);
        }
        if($file_proposal_usulan_kerjsama){
            $filename_proposal_usulan_kerjsama = '/file/' . time() . '_proposal_usulan_kerjsama.' . $request->proposal_usulan_kerjsama->extension(); 
            $request->proposal_usulan_kerjsama->move($path_global, $filename_proposal_usulan_kerjsama);
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

        Alert::success('Data telah berhasil diubah', 'silahkan lanjut ke BAB 2');
    
        return redirect()->route('proposal.editBab2', encrypt($id_proposal));
    }

    public function editbab2($id){

        $proposal = proposal::find(decrypt($id));
        $bab2 = bab2::find($proposal->id_bab2);

        return view('proposal.edit.bab2', ['proposal' => $proposal, 'bab2' => $bab2]);
    }

    public function updateBab2(Request $request){

        $id_proposal = decrypt($request->idProposal);
        $id_bab2 = decrypt($request->idBab2);

        $path_global = public_path('/file/');
        //$path_global = '/home/athifa01/public_html/ijinkerma/file/';

        $validator = $request->validate([
            'file_mou' => 'mimes:pdf|max:2048',
            'file_moa' => 'mimes:pdf|max:2048'
        ]);

        $file_file_mou = $request->hasFile('file_mou');
        $filename_file_mou = $request->file_mou_hidden;

        $file_file_moa = $request->hasFile('file_moa');
        $filename_file_moa = $request->file_moa_hidden;

        if($file_file_mou){
            $filename_file_mou = '/file/' . time() . '_file_mou.' . $request->file_mou->extension(); 
            $request->file_mou->move($path_global, $filename_file_mou);
        }
        if($file_file_moa){
            $filename_file_moa = '/file/' . time() . '_file_moa.' . $request->file_moa->extension(); 
            $request->file_moa->move($path_global, $filename_file_moa);
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
        Alert::success('Data telah berhasil diubah', 'silahkan lanjut ke BAB 3');
    
        return redirect()->route('proposal.editBab3', encrypt($id_proposal));
    }

    public function editbab3($id){
        $proposal = proposal::find(decrypt($id));
        $bab3 = bab3::find($proposal->id_bab3);
        
        return view('proposal.edit.bab3', ['proposal' => $proposal, 'bab3' => $bab3]);
    }
    
    public function updateBab3(Request $request){

        $id_proposal = decrypt($request->idProposal);
        $id_bab3 = decrypt($request->idBab3);

        $path_global = public_path('/file/');
        //$path_global = '/home/athifa01/public_html/ijinkerma/file/';

        $validator = $request->validate([
            'file_data_dosen_terlibat_pt' => 'mimes:pdf|max:2048',
            'file_data_dosen_terlibat_mitra' => 'mimes:pdf|max:2048',
            'file_lampiran_sarana_prasarana_pt' => 'mimes:pdf|max:2048',
            'file_lampiran_sarana_prasarana_mitra' => 'mimes:pdf|max:2048'
        ]);

        $file_data_dosen_terlibat_pt = $request->hasFile('file_data_dosen_terlibat_pt');
        $filename_file_data_dosen_terlibat_pt = $request->file_data_dosen_terlibat_pt_hidden;

        $file_data_dosen_terlibat_mitra = $request->hasFile('file_data_dosen_terlibat_mitra');
        $filename_file_data_dosen_terlibat_mitra = $request->file_data_dosen_terlibat_mitra_hidden;

        $file_lampiran_sarana_prasarana_pt = $request->hasFile('file_lampiran_sarana_prasarana_pt');
        $filename_file_lampiran_sarana_prasarana_pt = $request->file_lampiran_sarana_prasarana_pt_hidden;

        $file_lampiran_sarana_prasarana_mitra = $request->hasFile('file_lampiran_sarana_prasarana_mitra');
        $filename_file_lampiran_sarana_prasarana_mitra = $request->file_lampiran_sarana_prasarana_mitra_hidden;

        if($file_data_dosen_terlibat_pt){
            $filename_file_data_dosen_terlibat_pt = '/file/' . time() . '_file_data_dosen_terlibat_pt.' . $request->file_data_dosen_terlibat_pt->extension(); 
            $request->file_data_dosen_terlibat_pt->move($path_global, $filename_file_data_dosen_terlibat_pt);
        }

        if($file_data_dosen_terlibat_mitra){
            $filename_file_data_dosen_terlibat_mitra = '/file/' . time() . '_file_data_dosen_terlibat_mitra.' . $request->file_data_dosen_terlibat_mitra->extension(); 
            $request->file_data_dosen_terlibat_mitra->move($path_global, $filename_file_data_dosen_terlibat_mitra);
        }

        if($file_lampiran_sarana_prasarana_pt){
            $filename_file_lampiran_sarana_prasarana_pt = '/file/' . time() . '_file_lampiran_sarana_prasarana_pt.' . $request->file_lampiran_sarana_prasarana_pt->extension(); 
            $request->file_lampiran_sarana_prasarana_pt->move($path_global, $filename_file_lampiran_sarana_prasarana_pt);
        }

        if($file_lampiran_sarana_prasarana_mitra){
            $filename_file_lampiran_sarana_prasarana_mitra = '/file/' . time() . '_file_lampiran_sarana_prasarana_mitra.' . $request->file_lampiran_sarana_prasarana_mitra->extension(); 
            $request->file_lampiran_sarana_prasarana_mitra->move($path_global, $filename_file_lampiran_sarana_prasarana_mitra);
        }
        
        $data = ['deskripsi_singkat_kesiapan_sdm_pt' => $request->deskripsi_singkat_kesiapan_sdm_pt, 
        'deskripsi_singkat_kesiapan_sdm_mitra' => $request->deskripsi_singkat_kesiapan_sdm_mitra,
        'jumlah_dosen_terlibat_pt' => $request->jumlah_dosen_terlibat_pt, 'jumlah_dosen_terlibat_mitra' => $request->jumlah_dosen_terlibat_mitra,
        'deskripsi_singkat_pt' => $request->deskripsi_singkat_pt, 'deskripsi_singkat_mitra' => $request->deskripsi_singkat_mitra,
        
        'file_data_dosen_terlibat_pt' => $filename_file_data_dosen_terlibat_pt, 
        'file_data_dosen_terlibat_mitra' => $filename_file_data_dosen_terlibat_mitra,
        'file_lampiran_sarana_prasarana_pt' => $filename_file_lampiran_sarana_prasarana_pt, 
        'file_lampiran_sarana_prasarana_mitra' => $filename_file_lampiran_sarana_prasarana_mitra
        ];

        bab3::find($id_bab3)->update($data);

        Alert::success('Data telah berhasil diubah', 'silahkan lanjut ke BAB 4');
    
        return redirect()->route('proposal.editBab4', encrypt($id_proposal));
    }

    public function editbab4($id){
        $proposal = proposal::find(decrypt($id));
        $bab4 = bab4::find($proposal->id_bab4);
        $kerjasama = kerjasama::get();

        return view('proposal.edit.bab4', ['proposal' => $proposal, 'bab4' => $bab4, 'kerjasama' => $kerjasama]);
    }

    public function updateBab4(Request $request){
        $id_proposal = decrypt($request->idProposal);
        $id_bab4 = decrypt($request->idBab4);
        
        $path_global = public_path('/file/');
        //$path_global = '/home/athifa01/public_html/ijinkerma/file/';

        $validator = $request->validate([
            'scan_desain_kurikulum_pt' => 'mimes:pdf|max:500',
            'scan_desain_kurikulum_mitra' => 'mimes:pdf|max:500',
            'scan_desain_kurikulum_gabungan' => 'mimes:pdf|max:500',
            'file_penjadwalan_kerjasama' => 'mimes:pdf|max:2048',
            'file_skpi' => 'mimes:pdf|max:2048'
        ]);

        $scan_desain_kurikulum_pt = $request->hasFile('scan_desain_kurikulum_pt');
        $filename_scan_desain_kurikulum_pt = $request->scan_desain_kurikulum_pt_hidden;

        $scan_desain_kurikulum_mitra = $request->hasFile('scan_desain_kurikulum_mitra');
        $filename_scan_desain_kurikulum_mitra = $request->scan_desain_kurikulum_mitra_hidden;

        $scan_desain_kurikulum_gabungan = $request->hasFile('scan_desain_kurikulum_gabungan');
        $filename_scan_desain_kurikulum_gabungan = $request->scan_desain_kurikulum_gabungan_hidden;

        $file_penjadwalan_kerjasama = $request->hasFile('file_penjadwalan_kerjasama');
        $filename_file_penjadwalan_kerjasama = $request->file_penjadwalan_kerjasama_hidden;

        $file_skpi = $request->hasFile('file_skpi');
        $filename_file_skpi = $request->file_skpi_hidden;

        if($scan_desain_kurikulum_pt){
            $filename_scan_desain_kurikulum_pt = '/file/' . time() . '_scan_desain_kurikulum_pt.' . $request->scan_desain_kurikulum_pt->extension(); 
            $request->scan_desain_kurikulum_pt->move($path_global, $filename_scan_desain_kurikulum_pt);
        }

        if($scan_desain_kurikulum_mitra){
            $filename_scan_desain_kurikulum_mitra = '/file/' . time() . '_scan_desain_kurikulum_mitra.' . $request->scan_desain_kurikulum_mitra->extension(); 
            $request->scan_desain_kurikulum_mitra->move($path_global, $filename_scan_desain_kurikulum_mitra);
        }

        if($scan_desain_kurikulum_gabungan){
            $filename_scan_desain_kurikulum_gabungan = '/file/' . time() . '_scan_desain_kurikulum_gabungan.' . $request->scan_desain_kurikulum_gabungan->extension(); 
            $request->scan_desain_kurikulum_gabungan->move($path_global, $filename_scan_desain_kurikulum_gabungan);
        }

        if($file_penjadwalan_kerjasama){
            $filename_file_penjadwalan_kerjasama = '/file/' . time() . '_file_penjadwalan_kerjasama.' . $request->file_penjadwalan_kerjasama->extension(); 
            $request->file_penjadwalan_kerjasama->move($path_global, $filename_file_penjadwalan_kerjasama);
        }

        if($file_skpi){
            $filename_file_skpi = '/file/' . time() . '_file_skpi.' . $request->file_skpi->extension(); 
            $request->file_skpi->move($path_global, $filename_file_skpi);
        }

        $data = ['rencana_pelaksanaan_pembelajaran' => $request->rencana_pelaksanaan_pembelajaran, 
                 'id_jenis_kerjasama' => $request->id_jenis_kerjasama, 'jumlah_ijazah_terbit' => $request->jumlah_ijazah_terbit,
                 'nama_ttd_ijazah_pt' => $request->nama_ttd_ijazah_pt, 'jabatan_ttd_ijazah_pt'=> $request->jabatan_ttd_ijazah_pt,
                 'nama_ttd_ijazah_mitra'=> $request->nama_ttd_ijazah_mitra, 'jabatan_ttd_ijazah_mitra' => $request->jabatan_ttd_ijazah_mitra,
                 'kriteria_calon_mahasiswa' => $request->kriteria_calon_mahasiswa, 'proses_seleksi' => $request->proses_seleksi,
                 'skema_pembiayaan' => $request->skema_pembiayaan, 'keberlanjutan_studi_lanjut' => $request->keberlanjutan_studi_lanjut,
                 'studi_lanjut_moa' => $request->studi_lanjut_moa, 
                 'scan_desain_kurikulum_pt' => $filename_scan_desain_kurikulum_pt, 
                 'scan_desain_kurikulum_mitra' => $filename_scan_desain_kurikulum_mitra,
                 'scan_desain_kurikulum_gabungan' => $filename_scan_desain_kurikulum_gabungan, 
                 'file_penjadwalan_kerjasama' => $filename_file_penjadwalan_kerjasama, 
                 'file_skpi'=> $filename_file_skpi];

        bab4::find($id_bab4)->update($data);

        Alert::success('Data BAB 4 telah berhasil diubah', 'silahkan lanjut ke pengajuan proposal');

        return redirect()->route('proposal');
    }

    public function hapusProposal($id){
       
        $proposal = proposal::find(decrypt($id));
        $idBab1 = $proposal->id_bab1;
        $idBab2 = $proposal->id_bab2;
        $idBab3 = $proposal->id_bab3;
        $idBab4 = $proposal->id_bab4;

        proposal::find($proposal->id)->delete();
        
        bab1::find($idBab1)->delete();
        bab2::find($idBab2)->delete();
        bab3::find($idBab3)->delete();
        bab4::find($idBab4)->delete();

        Alert::success('Data proposal telah berhasil dihapus', 'silahkan lakukan pengajuan proposal kembali');

        return redirect()->route('proposal');
    }

    public function ajukanProposal($id){
        $data = ['id_status_berkas' => 6, 'status_pengisian' => 'Lengkap'];
       
        proposal::find(decrypt($id))->update($data);
        
        Alert::success('Proposal telah berhasil diajukan', 'Proposal anda akan diperiksa oleh admin terlebih dahulu');

        return redirect()->route('proposal');
    }

    public function updateJudul(Request $request){
            $data = ['judul' => $request->judul];
            proposal::find(decrypt($request->idProposal))->update($data);
            return redirect()->route('proposal');
    }

    
    public function cariProposal(Request $request){
        $idUniv = auth()->user()->id_universitas;
        $proposal = proposal::where($request->kriteria, 'like' , '%'.$request->filterInput.'%')->where('id_universitas', $idUniv)->orderBy('id','DESC')->paginate(10);
        $kerjasama = kerjasama::get();
        
        return view('proposal.index', ['proposal' => $proposal, 'kerjasama' => $kerjasama, 'lastPagination' => 10]);
    }
    
}
