<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusBerkas extends Model
{
    use HasFactory;

    protected $table = 'status_berkas';
    
    protected $fillable = ['status'];

    public function proposal(){
        return $this->hasMany(proposal::class,'id_status_berkas');
    }
}
