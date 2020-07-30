<?php

namespace App\Http\Controllers\Auth;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\model\t_pemohon;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class AuthController
 * @package App\Http\Controllers\Auth
 */
class AuthController extends CustomController
{
    //

    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('login.daftar');
    }

    public function register()
    {
        if ($this->postField('password') !== $this->postField('password_confirmation')) {
            return redirect()->back()->with(['fail' => 'Password Not Match']);
            dd('fail');
        }
        $data = [
            'username' => $this->postField('username'),
            'password' => Hash::make($this->postField('password')),
            'level' => 'pemohon'
        ];


        $user = $this->insert(User::class, $data);
        $dataProfile = [
            'user_id' => $user->id
        ];
        $this->insert(t_pemohon::class, $dataProfile);
        Auth::loginUsingId($user->id);
        return redirect('/user');
    }

    public function login()
    {
        $credentials = [
            'username' => $this->postField('username'),
            'password' => $this->postField('password')
        ];


        if ($this->isAuth($credentials)) {
            $level = Auth::user()->level;
            if($level == 'admin'){
                return redirect('/admin');
            }
            return redirect('/user');
        }
        return redirect()->back()->withInput()->with(['failed' => 'Periksa Kembali Username dan Password Anda']);

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
