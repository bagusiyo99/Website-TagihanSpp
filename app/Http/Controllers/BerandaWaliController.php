<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class BerandaWaliController extends Controller
{
    public function index (){
    $siswa = Siswa::with('tagihan')->where('wali_id', auth()->user()->id)->orderBy('nama', 'asc')->get();
    //perulangan data siswa
      foreach ($siswa as $itemSiswa) {
                $dataTagihan = [];
                $tahun =  date('Y');
                // perurangan bulan di helper
                foreach (bulanSPP() as $bulan) {
                    // jika bulan 1 maka tahun ditambah 1
                    if ($bulan == 1) {
                        $tahun = $tahun ;
                    }

                    // mencari tagihan berdasarkan siswa,tahun dan bulan

                    //cara  pertama  tutor 151
                    // $tagihan = $itemSiswa->tagihan()->where('siswa_id', $itemSiswa->id)
                    // ->whereYear('tanggal_tagihan', $tahun)
                    // ->whereMonth('tanggal_tagihan', $bulan)
                    // ->first();

                    
                    //cara kedua  agar website tidak berat tutor 152
                    $tagihan = $itemSiswa->tagihan->filter(function ($value) use ($bulan, $tahun){
                        return $value->tanggal_tagihan->year == $tahun && $value->tanggal_tagihan->month ==$bulan;
                    })->first();

                    
                    // masukan data ke arrat
                    $dataTagihan[] = [
                        'bulan' => ubahNamaBulan ($bulan),
                        'tahun' => $tahun,
                        'tagihan' => $tagihan,
                        //bisa tanggal lunas dan bisa status
                        'tanggal_lunas' => $tagihan->tanggal_lunas ?? '-',
                        'status' => $tagihan?->status == 'baru' ? 'Belum Bayar' : $tagihan?->status,
                    ];
                } 
                $dataRekap [] = [
                    'siswa' =>$itemSiswa,
                    'dataTagihan' => $dataTagihan
                ];
        }
        $data['siswa'] = Siswa::count();
        $data['dataRekap'] = $dataRekap;
        $data ['header'] = bulanSPP();
    return view('wali.beranda_index', $data);
    }
}
