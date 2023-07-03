<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab1 extends Model
{
    use HasFactory;

    protected $table = 'bab1';

    protected $fillable = ['nama_pt', 'alamat_pt', 'ijin_operasional_pt', 'scan_ijin_operasional_pt', 
    'id_status_akreditasi_institusi','scan_status_akreditasi_institusi', 'nama_pt_mitra','alamat_pt_mitra',
    'ijin_operasional_pt_mitra','scan_ijin_operasional_pt_mitra', 'id_status_akreditasi_institusi_mitra',
    'scan_status_akreditasi_institusi_mitra', 'id_negara_mitra', 'peringkat_internasional_mitra',
    'nama_prodi', 'nama_prodi_mitra', 'id_akreditasi_prodi', 'id_akreditasi_prodi_mitra', 'scan_sk_akreditasi_prodi',
    'scan_sk_akreditasi_prodi_mitra', 'scan_ijin_operasional_prodi', 'scan_ijin_operasional_prodi_mitra', 
    'proposal_usulan_kerjsama'];

    public function barang(){
        return $this->hasOne(proposal::class,'id_bab1');
    }
    public function status_akreditasi_institusi(){
        return $this->belongsTo(statusAkreditasi::class, 'id_status_akreditasi_institusi');
    }
    public function status_akreditasi_institusi_mitra(){
        return $this->belongsTo(statusAkreditasi::class, 'id_status_akreditasi_institusi_mitra');
    }
    public function status_akreditasi_prodi(){
        return $this->belongsTo(statusAkreditasi::class, 'id_status_akreditasi_prodi');
    }
    public function status_akreditasi_prodi_mitra(){
        return $this->belongsTo(statusAkreditasi::class, 'id_status_akreditasi_prodi_mitra');
    }
    public function negara_mitra(){
        return $this->belongsTo(negara::class, 'id_negara_mitra');
    }
}
