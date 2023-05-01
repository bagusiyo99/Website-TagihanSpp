<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaOperatorController extends Controller
{
    function index (){
        $tahun = date('Y');
        $bulan = date('m');
        $data['siswa'] = Siswa::count();
        $pembayaran= Pembayaran::whereYear('tanggal_bayar', $tahun)
            ->whereMonth('tanggal_bayar', $bulan)->get();
        
        $data['totalPembayaran'] = $pembayaran->sum('jumlah_dibayar');
        $data['SiswaSudahBayar'] = $pembayaran->count();

        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;
      return view('operator.beranda_index',$data);
    }


}
