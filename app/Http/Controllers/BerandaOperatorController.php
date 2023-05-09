<?php

namespace App\Http\Controllers;

use App\Charts\TagihanBulananChart;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Tagihan;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaOperatorController extends Controller
    
{
    function index (TagihanBulananChart $tagihanBulananChart){

        /// yang lama tutor 162
        $tahun = date('Y');
        $bulan = date('m');
        $data['siswa'] = Siswa::count();
        $pembayaran= Pembayaran::whereYear('tanggal_bayar', $tahun)
            ->whereMonth('tanggal_bayar', $bulan)->get();

        $data['dataPembayaranBelumKonfirmasi'] = Pembayaran::whereNull('tanggal_konfirmasi')->get();

        $data['totalPembayaran'] = $pembayaran->sum('jumlah_dibayar');
        $data['SiswaSudahBayar'] = $pembayaran->count();

        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;



                $tagihan= Tagihan::with('siswa')->whereYear('tanggal_tagihan', $tahun)
            ->whereMonth('tanggal_tagihan', $bulan)->get();
        $tagihanPerKelas = $tagihan->groupBy('siswa.kelas')->sortKeys();
        $tagihanBelumBayar= $tagihan->where('status', '<>', 'lunas');
        $tagihanSudahBayar= $tagihan->where('status', 'lunas');

        $data['tagihanPerKelas'] = $tagihanPerKelas;
        $data['totalTagihan'] = $tagihan->count();
        $data['tagihanBelumBayar'] = $tagihanBelumBayar;
        $data['tagihanSudahBayar'] = $tagihanSudahBayar;

             $data['tagihanChart'] = $tagihanBulananChart->build([
            $tagihanBelumBayar->count(),
            $tagihanSudahBayar->count(),
        ]);


      return view('operator.beranda_index',$data);


    //tutor 164
        // $tahun = date('Y');
        // $bulan = date('M');
        // $data['siswa'] = Siswa::get();
        // $pembayaran= Pembayaran::whereYear('tanggal_bayar', $tahun)
        //     ->whereMonth('tanggal_bayar', $bulan)->get();
        
        // $data['totalPembayaran'] = $pembayaran->sum('jumlah_dibayar');
        // $data['SiswaSudahBayar'] = $pembayaran->count();


        // $tagihan= Tagihan::with('siswa')->whereYear('tanggal_tagihan', $tahun)
        //     ->whereMonth('tanggal_tagihan', $bulan)->get();
        // $tagihanPerKelas = $tagihan->groupBy('siswa.kelas')->sortKeys();
        // $tagihanBelumBayar= $tagihan->where('status', '<>', 'lunas');
        // $tagihanSudahBayar= $tagihan->where('status', 'lunas');

        // $data['tagihanPerKelas'] = $tagihanPerKelas;
        // $data['totalTagihan'] = $tagihan->count();
        // $data['tagihanBelumBayar'] = $tagihanBelumBayar;
        // $data['tagihanSudahBayar'] = $tagihanSudahBayar;

        // $data['tahun'] = $tahun;
        // $data['bulan'] = $bulan;
        // // $data['bulanTeks'] = ubahNamaBulan($bulan);
        // // $data[data]

        // $data['tagihanChart'] = $tagihanBulananChart->build([
        //     $tagihanBelumBayar->count(),
        //     $tagihanSudahBayar->count(),
        // ]);
      return view('operator.beranda_index',$data);
    }


}
