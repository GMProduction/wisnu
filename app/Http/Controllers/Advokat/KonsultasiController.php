<?php

namespace App\Http\Controllers\Advokat;

use App\Helper\CustomController;
use App\model\t_jadwal;
use App\model\t_konsultasi;

class KonsultasiController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user = auth()->user()->id;

        $jadwals = t_jadwal::with(['jadwal.pemohon.pemohon', 'advokat'])->whereHas(
            'advokat',
            function ($query) use ($user) {
                return $query->where('user_id', $user);
            }
        )->get();

        return view('advokat.konsultasi.konsultasi')->with(['jadwals' => $jadwals]);
    }

    public function detail($id)
    {
        $user = auth()->user()->id;

        $jadwals = t_jadwal::with(['konsultasi'])->where('id', $id)->first();
//        return $jadwals->toArray();
        if ($this->request->isMethod('POST')) {
            $data = [
                'id_jadwal'         => $this->postField('id_jadwal'),
                'id_advokat'        => $this->postField('id_advokat'),
                'proses_konsultasi' => $this->postField('proses_konsultasi'),
                'detail_konsultasi' => $this->postField('detail_konsultasi'),
            ];
//            dump($data);die();
            if($this->request->get('aksi') == 'add'){
                $this->insert(t_konsultasi::class, $data);
                return redirect()->back()->with(['success' => 'success']);
            }else{
                $this->update(t_konsultasi::class, $data);
                return redirect()->back()->with(['edit' => 'success']);
            }

        }

        return view('advokat.konsultasi.detailkonsultasi')->with(['kasus' => $jadwals]);
    }

}
