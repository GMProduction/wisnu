<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class t_permohonan extends Model
{
    //

    protected $primaryKey = 'id_permohonan';

    protected $fillable = [
        'id_permohonan',
        'no_registrasi',
        'keterangan_permohonan',
        'alasan',
    ];
}
