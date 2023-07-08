<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposal extends Model
{
    use HasFactory;

    protected $table = 'proposal';

    protected $fillable = ['judul', 'id_universitas' ,'tanggal_pengajuan', 'status_pengisian', 
    'status_berkas', 'pt_mitra_negeri', 'prodi_pt_mitra_negeri', 
     'prodi_pt_dalam_negeri', 'id_jenis_kerjasama','id_bab1', 'id_bab2', 'id_bab3', 'id_bab4'];

    public function kerjasama(){
        return $this->belongsTo(kerjasama::class, 'id_jenis_kerjasama');
    }

    public function bab1(){
        return $this->belongsTo(bab1::class, 'id_bab1');
    }
}
