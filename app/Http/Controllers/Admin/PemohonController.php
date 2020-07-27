<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\model\t_pemohon;

class PemohonController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $pemohon = t_pemohon::all();
        return view('admin.pemohon.pemohon')->with(['pemohons' => $pemohon]);

    }
}
