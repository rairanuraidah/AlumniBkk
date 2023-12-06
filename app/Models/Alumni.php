<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Database\Eloquent\Auth as Model;

class Alumni extends Model
{
    use HasFactory;
    
    protected $table = "alumni";
    protected $guarded = [];

    function lowongan(){
        return $this->hasMany(Lowongan::class,'nis');
    }
    function lamaran(){
        return $this->hasMany(Lamaran::class,'nis');
    }
}
