<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negara extends Model
{
    use HasFactory;

    protected $table = 'daftar_negara';
    
    protected $fillable = ['nama', 'name', 'nicename', 'iso3', 'numcode', 'phonecode'];

    public function bab1(){
        return $this->hasMany(bab1::class,'id_negara_mitra');
    }
}
