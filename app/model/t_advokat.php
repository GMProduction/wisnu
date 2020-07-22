<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class t_advokat extends Model
{
    //

    protected  $primaryKey = 'id_advokat';

    protected $fillable = [
        'id_advokat',
        'nama_advokat',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telepon',
        'email',
    ];

}
