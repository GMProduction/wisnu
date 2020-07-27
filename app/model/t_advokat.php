<?php

namespace App\model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class t_advokat extends Model
{
    //

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_advokat',
        'nama_advokat',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telepon',
        'email',
    ];

    public function advokat()
    {
        return $this->hasMany(t_jadwal::class, 'id');
    }

    public function useradvokat()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
