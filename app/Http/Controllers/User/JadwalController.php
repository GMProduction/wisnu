<?php

namespace App\Http\Controllers\User;

use App\Helper\CustomController;

class JadwalController extends CustomController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//        return $kasus->toArray();
        return view('user.jadwal.jadwal');
    }
}
