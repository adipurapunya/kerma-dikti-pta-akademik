<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab1 extends Model
{
    use HasFactory;

    protected $table = 'bab1';

    protected $fillable = ['nama_pt', 'alamat_pt', 'ijin_operasional_pt', 'scan_ijin_operasional_pt', 
    'status_akreditasi_institusi','scan_status_akreditasi_institusi', 'nama_pt_mitra','alamat_pt_mitra',
    'ijin_operasional_pt_mitra','scan_ijin_operasional_pt_mitra', 'status_akreditasi_institusi_mitra',
    'scan_status_akreditasi_institusi_mitra', 'negara_mitra', 'peringkat_internasional_mitra'];

    public function barang(){
        return $this->hasOne(proposal::class,'id_bab1');
    }
}
