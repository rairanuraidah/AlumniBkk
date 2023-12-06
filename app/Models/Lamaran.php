<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;

    protected $table = "lamaran";
    protected $guarded = [];

    function lowongan(){
        return $this->belongsTo(Lowongan::class,'id_loker');
    }
}
