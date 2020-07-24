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

Route::get('/', function () {
    return view('login.login');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/daftar', function () {
    return view('login.daftar');
});

Route::get('/user', function () {
    return view('user/dashboard');
});

Route::get('/user/pemohon', function () {
    return view('user/pemohon');
});

Route::get('/user/kasus', function () {
    return view('user/kasus/kasus');
});

Route::get('/user/tambahkasus', function () {
    return view('user/kasus/tambahkasus');
});

Route::get('/user/jadwal', function () {
    return view('user/jadwal');
});




Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin/pemohon', function () {
    return view('admin/pemohon/pemohon');
});

Route::get('/admin/kasus', function () {
    return view('admin/kasus/kasus');
});

Route::get('/admin/kasusdetail', function () {
    return view('admin/kasus/kasusdetail');
});

Route::get('/admin/advokat', function () {
    return view('admin/advokat/advokat');
});

Route::get('/admin/tambahadvokat', function () {
    return view('admin/advokat/tambahadvokat');
});

Route::get('/admin/jadwal', function () {
    return view('admin/jadwal/jadwal');
});

Route::get('/admin/tambahjadwal', function () {
    return view('admin/jadwal/tambahjadwal');
});


Route::get('/admin/pemohon/cetak', 'LaporanController@cetakAdminDataPemohon')->name('admindatapemohoncetak');
Route::get('/admin/kasus/cetak', 'LaporanController@cetakAdminDataKasus')->name('admindatakasuscetak');
Route::get('/admin/advokat/cetak', 'LaporanController@cetakAdminDataAdvokat')->name('admindataadvokatcetak');
Route::get('/admin/jadwal/cetak', 'LaporanController@cetakAdminDataJadwal')->name('admindataadvokatjadwal');
