<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\model\t_advokat;
use App\model\t_pemohon;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdvokatController extends CustomController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $advokat = t_advokat::all();
        return view('admin.advokat.advokat')->with(['advokats' => $advokat]);
    }

    public function delete($id){
        $advokat = t_advokat::findOrFail($id)->get();
        $advokat->delete();
        return redirect()->back()->with(['success' => 'success']);
    }

    public function addForm(){
        $userData = [
            'username' => $this->postField('username'),
            'password' => Hash::make($this->postField('password')),
            'level' => 'advokat'
        ];
        $user = $this->insert(User::class, $userData);
        $dataProfile = [
            'user_id' => $user->id
        ];
        $this->insert(t_advokat::class, $dataProfile);
        $advokat = t_advokat::where('user_id',$user->id)->first();
//
        $data = [
           'nama_advokat' => $this->postField('namaAdvokat'),
            'alamat' => $this->postField('alamat'),
            'tempat_lahir' => $this->postField('tempatLahir'),
            'tanggal_lahir' => $this->postField('tanggalLahir'),
            'no_telepon' => $this->postField('notelp'),
            'email' => $this->postField('email'),
        ];

        foreach ($data as $key => $d) {
            $advokat[$key] = $data[$key];
        }
        $advokat->save();
        return redirect()->back()->with(['success' => 'success']);

    }

    public function editAdvokat($id){
        $advokat = t_advokat::where('id',$id)->with('useradvokat.useradvokat')->get();
//        dump($advokat);die();
        if($this->request->isMethod('POST')){
            $data = [
                'nama_advokat' => $this->postField('namaAdvokat'),
                'alamat' => $this->postField('alamat'),
                'tempat_lahir' => $this->postField('tempatLahir'),
                'tanggal_lahir' => $this->postField('tanggalLahir'),
                'no_telepon' => $this->postField('notelp'),
                'email' => $this->postField('email'),
            ];
            $this->update(t_advokat::class, $data);
            return redirect()->back()->with(['success' => 'success']);
        }
        return view('admin.advokat.editadvokat')->with(['advokats' => $advokat]);

    }
}
