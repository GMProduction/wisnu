<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class t_konsultasi extends Model
{
    //
    protected $table = 't_konsultasis';

    public function jadwal(){
        return $this->belongsTo(t_jadwal::class, 'id');
    }

    public function advokat(){
        return $this->belongsTo(t_advokat::class, 'id_advokat');
    }
}
