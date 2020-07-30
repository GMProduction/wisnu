<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\model\t_advokat;
use App\model\t_jadwal;
use App\model\t_kasus;
use App\model\t_pemohon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function adminDataPemohon(Request $request)
    {
        $pemohon = t_pemohon::all();
        return view('admin.pemohon.cetak')->with(['pemohons' => $pemohon]);
    }

    public function cetakAdminDataPemohon(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataPemohon($request))->setPaper('b4', 'landscape');
        return $pdf->stream();
//        return $this->adminDataPemohon($request);
    }

    public function adminDataKasus(Request $request)
    {
        $kasus = t_kasus::with('pemohon.pemohon')->get();

        return view('admin.kasus.cetak')->with(['kasus' => $kasus]);
    }

    public function cetakAdminDataKasus(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataKasus($request));
        return $pdf->stream();
    }


    public function adminDataAdvokat(Request $request)
    {
        $advokat = t_advokat::all();
        return view('admin.advokat.cetak')->with(['advokats' => $advokat]);
    }

    public function cetakAdminDataAdvokat(Request $request)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataAdvokat($request));
        return $pdf->stream();
//        return $this->adminDataAdvokat($request);
    }

    public function adminDatajadwal(Request $request)
    {
//        $caridata = $request->caridata;
//        $status = $request->status;
//        $mitra = mitraModel::where('status', 'LIKE', '%' . $status . '%')
//            ->where(function ($q) use ($caridata) {
//                $q->where('username', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('email', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('noHp', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('alamat', 'LIKE', '%' . $caridata . '%');
//            })
//            ->get();
        return view('admin.jadwal.cetak')->with(['mitra' => "datanya"]);
    }

    public function cetakAdminDatajadwal(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDatajadwal($request))->setPaper('f4', 'landscape');
        return $pdf->stream();
    }

    public function adminDataJadwalDetail($id)
    {
        $jadwals = t_jadwal::where('id',$id)->with(['jadwal.jadwal','advokat.advokat'])->first();
//        dump($jadwals);die();
        return view('admin.jadwal.cetakDetail')->with(['kasus' => $jadwals]);
    }

    public function cetakAdminDataJadwalDetail($id)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataJadwalDetail($id))->setPaper('b4', 'potrait');
        return $pdf->stream();
//        return $this->adminDataJadwalDetail($id);
    }

    public function adminDataKasusDetail($id)
    {
//        $jadwals = t_jadwal::where('id',$id)->with(['jadwal.jadwal','advokat.advokat'])->first();
//        dump($jadwals);die();
        return view('admin.kasus.cetakDetail')->with(['kasus' => "jadwals"]);
    }

    public function cetakAdminDataKasusDetail($id)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataKasusDetail($id))->setPaper('b4', 'potrait');
        return $pdf->stream();
//        return $this->adminDataJadwalDetail($id);
    }

}
