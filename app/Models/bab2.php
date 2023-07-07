<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab2 extends Model
{
    use HasFactory;

    protected $table = 'bab2';

    protected $fillable = ['ringkasan_mou', 'file_mou', 'no_moa', 'deskripsi_singkat_moa', 'tanggal_dimulai_moa', 'tanggal_berakhir_moa', 'file_moa', 
    'misi_program_kerjasama', 'target_program_kerjasama', 'alasan_pemilihan_mitra', 'prinsip_kerjasama', 'manfaat_kerjasama', 'tantangan_pelaksanaan_kerjasama',
    'kepemilikan_hak_cipta_paten', 'mekanisme_resiprokal', 'keberlanjutan_kerjsama',  'hak_dan_kewajiban', 'hak_tercantum'];

    public function barang(){
        return $this->hasOne(proposal::class,'id_bab2');
    }

}
