<?php

namespace App\Http\Controllers\User;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\model\t_kasus;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        $user = auth()->user()->id;

        $kasus = t_kasus::where('id_pemohon',$user)->with('pemohon.pemohon')->get();
//        return $kasus->toArray();
        return view('user.kasus.kasus')->with(['kasus' => $kasus]);
    }

    public function addForm()
    {
        return view('user.kasus.tambahkasus');
    }

    public function editForm($id)
    {
//        $kasus = t_kasus::where('id',$id)->get();
        $kasus = t_kasus::where('no_registrasi',$id)->first();

        if($this->request->isMethod('POST')){
            $data = [
                'layanan' => $this->postField('layanan'),
                'kronologi_kasus' => $this->postField('kronologiKasus'),
                'jenis_kasus' => $this->postField('jenisKasus'),
            ];
            $kasus->layanan = $data['layanan'];
            $kasus->kronologi_kasus = $data['kronologi_kasus'];
            $kasus->jenis_kasus = $data['jenis_kasus'];
            $kasus->save();
//            $this->update(t_kasus::class,$data);
            return redirect()->back()->with(['success' => 'success']);
        }
        return view('user.kasus.editkasus')->with(['kasus' => $kasus]);
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
        if ($this->request->hasFile('bukti')) {
            $image = $this->generateImageName('bukti');
            $data   = Arr::add($data, 'image', $image);
            $this->uploadImage('image', $image, 'bukti');
        }

        $this->insert(t_kasus::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
