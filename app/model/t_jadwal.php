<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class t_jadwal extends Model
{
    //
    protected $table = 't_jadwals';
    protected $primaryKey = 'id';

    protected $fillable = [
        'no_registrasi',
        'tanggal',
        'id_advokat',
        'layanan'
    ];

    public function jadwal()
    {
        return $this->belongsTo(t_kasus::class,'no_registrasi');
    }

    public function advokat(){
        return $this->belongsTo(t_advokat::class,'id_advokat');
    }

}
