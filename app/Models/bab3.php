<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab3 extends Model
{
    use HasFactory;

    protected $table = 'bab3';

    protected $fillable = ['deskripsi_singkat_kesiapan_sdm_pt', 'deskripsi_singkat_kesiapan_sdm_mitra', 'jumlah_dosen_terlibat_pt', 'jumlah_dosen_terlibat_mitra',
    'file_data_dosen_terlibat_pt', 'file_data_dosen_terlibat_mitra', 'deskripsi_singkat_pt', 'deskripsi_singkat_mitra', 
    'file_lampiran_sarana_prasarana_pt', 'file_lampiran_sarana_prasarana_mitra'];

    public function barang(){
        return $this->hasOne(proposal::class,'id_bab3');
    }
}
