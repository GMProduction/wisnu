<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class t_kasus extends Model
{
    //
    protected $table = "t_kasus";

    protected $primaryKey = 'id';

    protected $fillable = [
        'no_registrasi',
        'no_identitas',
        'nama_pemohon',
        'jenis_kasus',
        'layanan',
        'kronologi_kasus',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pemohon(){
        return $this->belongsTo(t_pemohon::class);
    }
}
