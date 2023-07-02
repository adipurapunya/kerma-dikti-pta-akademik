<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusAkreditasi extends Model
{
    use HasFactory;

    protected $table = 'status_akreditasi_pt';
    
    protected $fillable = ['status'];

    public function bab1(){
        return $this->hasMany(bab1::class,'id_status_akreditasi_institusi');
    }
}
