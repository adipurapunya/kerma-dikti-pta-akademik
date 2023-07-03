<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    use HasFactory;

    protected $table = 'universitas';
    
    protected $fillable = ['nama_universitas'];

    public function User(){
        return $this->hasMany(User::class,'id_universitas');
    }
}
