<?php

namespace App\Http\Controllers\User;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\model\t_pemohon;
use Illuminate\Http\Request;

/**
 * Class PemohonController
 * @package App\Http\Controllers\User
 */
class PemohonController extends CustomController
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
        $user = t_pemohon::where('user_id', '=', auth()->id())->firstOrFail();
        return view('user.pemohon')->with(['user' => $user]);
    }

    public function updateProfile()
    {
        $data = [
          'no_identitas' => $this->postField('noIdentitas'),
          'nama_pemohon' => $this->postField('nama'),
          'alamat' => $this->postField('alamat'),
          'tempat_lahir' => $this->postField('tempatLahir'),
          'tanggal_lahir' => $this->postField('tanggalLahir'),
          'pekerjaan' => $this->postField('pekerjaan'),
          'no_telepon' => $this->postField('notelp'),
          'email' => $this->postField('email'),
          'jenis_kelamin' => $this->postField('jenkel'),
          'agama' => $this->postField('agama'),
          'status' => $this->postField('status'),
          'kewarganegaraan' => $this->postField('kewarganegaraan'),
        ];
        $this->update(t_pemohon::class, $data);
        return redirect()->back();
    }
}
