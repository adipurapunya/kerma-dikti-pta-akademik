<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerjasama extends Model
{
    use HasFactory;

    protected $table = 'jenis_kerjasama';
    
    protected $fillable = ['jenis_kerjasama'];

    public function proposal(){
        return $this->hasMany(proposal::class,'id_jenis_kerja_sama');
    }
}
