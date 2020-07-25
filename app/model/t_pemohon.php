<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class t_pemohon extends Model
{
    //

    use Notifiable;

    protected $table = "t_pemohons";
    protected $primaryKey = 'id_pemohons';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pemohons',
        'no_identitas',
        'nama_pemohon',
        'jenis_kelamin',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'agama',
        'kewarganegaraan',
        'status',
        'no_telepon',
        'email',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kasus(){
        return $this->hasMany(t_kasus::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

}
