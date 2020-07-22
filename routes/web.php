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
