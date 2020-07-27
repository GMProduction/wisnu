<?php

namespace App\Http\Controllers\Admin;

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
        $jadwals = t_jadwal::with(['jadwal.jadwal','advokat.advokat'])->get();
        return view('admin.jadwal.jadwal')->with(['jadwals' => $jadwals]);
    }

    public function detailJadwal($id){
        $jadwals = t_jadwal::with(['jadwal.jadwal','advokat.advokat'])->where('id',$id)->first();
        return view('admin.jadwal.detailjadwal')->with(['kasus' => $jadwals]);
    }
}
