<?php

namespace App\model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class t_pemohon extends Model
{
    //

    use Notifiable;

    protected $table = "t_pemohons";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * @var array
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
