<?php

namespace App\Http\Controllers\Advokat;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\model\t_advokat;
use App\model\t_pemohon;
use Illuminate\Http\Request;

/**
 * Class PemohonController
 * @package App\Http\Controllers\User
 */
class ProfilController extends CustomController
{
    //

    /**
     * PemohonController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user = t_advokat::where('user_id', '=', auth()->id())->firstOrFail();
//        dump($user);die();
        if($this->request->isMethod('POST')){
            $data = [
                'nama_advokat' => $this->postField('nama'),
                'alamat' => $this->postField('alamat'),
                'tempat_lahir' => $this->postField('tempatLahir'),
                'tanggal_lahir' => $this->postField('tanggalLahir'),
                'no_telepon' => $this->postField('notelp'),
                'email' => $this->postField('email'),
            ];
            $this->update(t_advokat::class, $data);
            return redirect()->back()->with(['success' => 'success']);

        }
        return view('advokat.advokat')->with(['user' => $user]);
    }

    public function updateProfile()
    {

        return redirect()->back();
    }
}
