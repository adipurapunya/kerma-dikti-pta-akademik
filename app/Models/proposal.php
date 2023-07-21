<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposal extends Model
{
    use HasFactory;

    protected $table = 'proposal';

    protected $fillable = ['judul', 'id_universitas' ,'tanggal_pengajuan', 'status_pengisian', 
    'id_status_berkas', 'pt_mitra_negeri', 'prodi_pt_mitra_negeri', 'reviewer1',
     'prodi_pt_dalam_negeri', 'id_jenis_kerjasama','id_bab1', 'id_bab2', 'id_bab3', 'id_bab4'];

    public function kerjasama(){
        return $this->belongsTo(kerjasama::class, 'id_jenis_kerjasama');
    }

    public function bab1(){
        return $this->belongsTo(bab1::class, 'id_bab1');
    }

    public function bab2(){
        return $this->belongsTo(bab2::class, 'id_bab2');
    }

    public function bab3(){
        return $this->belongsTo(bab3::class, 'id_bab3');
    }

    public function bab4(){
        return $this->belongsTo(bab4::class, 'id_bab4');
    }

    public function statusBerkas(){
        return $this->belongsTo(statusBerkas::class, 'id_status_berkas');
    }
}
