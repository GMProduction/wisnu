<?php

namespace App\model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class t_kasus extends Model
{
    //
    protected $table = 't_kasus';

    protected $fillable = [
        'no_registrasi',
        'no_identitas',
        'nama_pemohon',
        'jenis_kasus',
        'layanan',
        'kronologi_kasus',
    ];
    public function pemohon()
    {
        return $this->belongsTo(User::class, 'id_pemohon');
    }
}
