<?php

namespace App\Http\Controllers\Advokat;

use App\Helper\CustomController;
use App\model\t_jadwal;

class JadwalController extends CustomController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user = auth()->user()->id;
//        return $kasus->toArray();
        $jadwals = t_jadwal::with(['jadwal','advokat'])->whereHas('advokat',function ($query) use ($user) {
            return $query->where('user_id', $user);
        })->get();
//        return $jadwals->toArray();
//        return $jadwals->toArray();
//        dump($jadwals[0]->advokat);
//        dump($jadwals[0]->jadwal->id_pemohon);
//        dump($jadwals[0]->advokat->no_registrasi);
//        dump($jadwals);die();
        return view('advokat.jadwal.jadwal')->with(['jadwals' => $jadwals]);
    }
}
