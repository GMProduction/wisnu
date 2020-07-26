<?php

namespace App\Http\Controllers\User;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\model\t_kasus;
use Illuminate\Http\Request;

/**
 * Class KasusController
 * @package App\Http\Controllers\User
 */
class KasusController extends CustomController
{
    //

    /**
     * KasusController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $kasus = t_kasus::with('pemohon.pemohon')->get();
//        return $kasus->toArray();
        return view('user.kasus.kasus')->with(['kasus' => $kasus]);
    }

    public function addForm()
    {
        return view('user.kasus.tambahkasus');
    }

    public function store()
    {
        $data = [
            'no_registrasi' => 'REG-' . date('YmdHis'),
            'layanan' => $this->postField('layanan'),
            'kronologi_kasus' => $this->postField('kronologiKasus'),
            'jenis_kasus' => $this->postField('jenisKasus'),
            'id_pemohon' => auth()->id(),
        ];

        $this->insert(t_kasus::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
