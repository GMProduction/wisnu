<?php

namespace App\Http\Controllers\User;

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
        $jadwals = t_jadwal::with(['jadwal.jadwal','advokat.advokat'])->whereHas('jadwal',function ($query) use ($user) {
            return $query->where('id_pemohon', $user);
        })->get();
//        return $jadwals->toArray();
//        dump($jadwals[0]->advokat);
//        dump($jadwals[0]->jadwal->id_pemohon);
//        dump($jadwals[0]->advokat->no_registrasi);
//        dump($jadwals);die();
        return view('user.jadwal.jadwal')->with(['jadwals' => $jadwals]);
    }
}
