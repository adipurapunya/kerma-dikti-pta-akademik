<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab4 extends Model
{
    use HasFactory;

    protected $table = 'bab4';

    protected $fillable = ['rencana_pelaksanaan_pembelajaran', 'scan_desain_kurikulum_pt', 'scan_desain_kurikulum_mitra', 'scan_desain_kurikulum_gabungan',
    'id_jenis_kerjasama', 'jumlah_ijazah_terbit', 'nama_ttd_ijazah_pt', 'nama_ttd_ijazah_mitra', 'jabatan_ttd_ijazah_pt', 'jabatan_ttd_ijazah_mitra',
    'kriteria_calon_mahasiswa', 'proses_seleksi', 'skema_pembiayaan', 'file_penjadwalan_kerjasama', 'file_skpi', 'keberlanjutan_studi_lanjut', 'studi_lanjut_moa'];

    public function barang(){
        return $this->hasOne(proposal::class,'id_bab4');
    }
   
}
