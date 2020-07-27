<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class t_jadwal extends Model
{
    //
    protected $table = 't_jadwal';
    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
        'id_jadwal',
        'no_registrasi',
        'tanggal',
        'id_advokat',
    ];

    public function kasus()
    {
        return $this->belongsTo(t_kasus::class,'no_registrasi');
    }

}
