<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class t_kasus extends Model
{
    //
    protected $primaryKey = 'id';

    protected $fillable = [
        'no_registrasi',
        'no_identitas',
        'nama_pemohon',
        'jenis_kasus',
        'layanan',
        'kronologi_kasus',
    ];
}
