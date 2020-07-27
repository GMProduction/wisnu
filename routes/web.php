<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    function () {
        return view('login.login');
    }
);

Route::get(
    '/login',
    function () {
        return view('login.login');
    }
);

Route::get(
    '/daftar',
    function () {
        return view('login.daftar');
    }
);

Route::get(
    '/user',
    function () {
        return view('user/dashboard');
    }
);

Route::get(
    '/user/pemohon',
    function () {
        return view('user/pemohon');
    }
);

Route::get(
    '/user/kasus',
    function () {
        return view('user/kasus/kasus');
    }
);

Route::get(
    '/user/tambahkasus',
    function () {
        return view('user/kasus/tambahkasus');
    }
);

Route::get(
    '/user/konsultasi',
    function () {
        return view('user/konsultasi/konsultasi');
    }
);

Route::get(
    '/admin',
    function () {
        return view('admin/dashboard');
    }
);

Route::get('/admin/pemohon','Admin\PemohonController@index');

Route::get('/admin/kasus', 'Admin\KasusController@index');
Route::get('/admin/kasus/kasusdetail/{id}', 'Admin\KasusController@kasusDetail');
Route::post('/admin/kasus/kasusdetail/{id}', 'Admin\KasusController@kasusDetail');
Route::get('/admin/kasus/kasusdetail/confirmKasus', 'Admin\KasusController@confirmKasus');

Route::get('/admin/advokat','Admin\AdvokatController@index');
Route::post('/admin/advokat/store','Admin\AdvokatController@addForm');
Route::get('/admin/advokat/tambahadvokat',function (){return view('admin/advokat/tambahadvokat');});
Route::get('/admin/advokat/editadvokat/{id}','Admin\AdvokatController@editAdvokat');
Route::post('/admin/advokat/editadvokat/{id}','Admin\AdvokatController@editAdvokat');
Route::get('/admin/advokat/delete/{id}','Admin\AdvokatController@delete');

Route::get('/admin/jadwal','Admin\JadwalController@index');
Route::get('/admin/jadwal/detail/{id}','Admin\JadwalController@detailJadwal');


Route::get(
    '/admin/tambahjadwal',
    function () {
        return view('admin/jadwal/tambahjadwal');
    }
);

//email
Route::get('/admin/email', function () {
    return view('admin/send_email');
});
Route::post('/admin/sendEmail', 'Email@sendEmail');


Route::get('/admin/pemohon/cetak', 'LaporanController@cetakAdminDataPemohon')->name('admindatapemohoncetak');
Route::get('/admin/kasus/cetak', 'LaporanController@cetakAdminDataKasus')->name('admindatakasuscetak');
Route::get('/admin/advokat/cetak', 'LaporanController@cetakAdminDataAdvokat');
Route::get('/admin/jadwal/cetak', 'LaporanController@cetakAdminDataJadwal')->name('admindataadvokatjadwal');

Route::get('/register', 'Auth\AuthController@index');
Route::post('/post-register', 'Auth\AuthController@register');

Route::get('/user', 'User\MainController@index');
Route::get('/user/pemohon', 'User\PemohonController@index');
Route::post('/user/pemohon/update', 'User\PemohonController@updateProfile');

Route::get('/user/kasus', 'User\KasusController@index');
Route::get('/user/kasus/add', 'User\KasusController@addForm');
Route::get('/user/kasus/edit/{id}', 'User\KasusController@editForm');
Route::post('/user/kasus/edit/{id}', 'User\KasusController@editForm');
Route::post('/user/kasus/store', 'User\KasusController@store');

Route::get('/user/jadwal', 'User\JadwalController@index');

Route::get('/logout', 'Auth\AuthController@logout');
Route::post('/postlogin', 'Auth\AuthController@login');

