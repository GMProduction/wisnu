<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\model\t_advokat;
use App\model\t_jadwal;
use App\model\t_kasus;

class KasusController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $kasus = t_kasus::with('pemohon.pemohon')->get();
//        return $kasus->toArray();
        return view('admin.kasus.kasus')->with(['kasus' => $kasus]);
    }

    public function kasusDetail($id){
        $kasus = t_kasus::where('no_registrasi',$id)->with('pemohon.pemohon')->first();

        if($this->request->isMethod('POST')){
            $data = [
                'no_registrasi' => $this->postField('id'),
                'status' => $this->postField('status'),
            ];
            if ($data['status'] == 'tolak'){
                $data['alasan'] = $this->postField('alasan');
            }else{
                $tanggal =  $this->postField('tanggal').' '.$this->postField('jam').':'.$this->postField('menit').':00';
                $jadwal = [
                  'no_registrasi' => $this->postField('noRegistrasi'),
                  'tanggal' => $tanggal,
                  'id_advokat' => $this->postField('advokat'),
                  'layanan' => $this->postField('layanan'),
                ];
//                dump($jadwal);die();
                $data['alasan'] = 'diterima';
                $this->insert(t_jadwal::class, $jadwal);
            }
            $kasus->status = $data['status'];
            $kasus->alasan = $data['alasan'];
            $kasus->save();
            $data['success'] = 'success';
//            return $this->kasusDetail($id);
        }
        $data['kasus'] = $kasus;
        $data['advokats'] = t_advokat::all();
        return view('admin.kasus.kasusdetail')->with($data);
    }

    public function confirmKasus(){
        $data = [
          'id' => $this->postField('id'),
          'status' => $this->postField('status'),
        ];
        $this->update(t_kasus::class, $data);

        return redirect()->back()->with(['success' => 'success', 'status' => 'di '.$data['status']]);
    }
}
