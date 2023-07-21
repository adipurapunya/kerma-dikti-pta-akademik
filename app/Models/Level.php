<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'level_user';
    
    protected $fillable = ['level'];

    public function User(){
        return $this->hasMany(User::class,'id_level');
    }
}
