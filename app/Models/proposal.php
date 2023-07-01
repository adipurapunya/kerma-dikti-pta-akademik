<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposal extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = ['judul', 'tanggal_pengajuan', 'status_pengisian', 
    'status_berkas', 'pt_mitra_negeri', 'prodi_pt_mitra_negeri', 
    'judul', 'id_jenis_kerja_sama', 'prodi_pt_dalam_negeri'];

    public function kerjasama(){
        return $this->belongsTo(kerjasama::class, 'id_jenis_kerja_sama');
    }
}
