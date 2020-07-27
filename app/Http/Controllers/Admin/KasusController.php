<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
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
            $kasus->status = $data['status'];
            $kasus->save();
            $data['success'] = 'success';
        }
        $data['kasus'] = $kasus;
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
