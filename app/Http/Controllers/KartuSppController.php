<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class KartuSppController extends Controller
{
     public function index(Request $request)
    {
        //{{-- tutor 132 --}}

        //        $tagihan = Tagihan::where('siswa_id', $request->siswa_id)
        // ->whereYear('tanggal_tagihan', $request->tahun)
        // ->get();


        $siswa = Siswa::findOrFail($request->siswa_id);
        if (Auth::user()->akses == 'wali') {
            $siswa = Siswa::where('wali_id', Auth::user()->id)
            ->where('id', $request->siswa_id)
            ->firstOrFail();
        }else {
            $siswa = Siswa::findOrFail($request->siswa_id);
        }

            $arrayData = [];
            $tahun =  $request->tahun;
            // perurangan bulan di helper
            foreach (bulanSPP() as $bulan) {
                // jika bulan 1 maka tahun ditambah 1
                if ($bulan == 1) {
                    $tahun = $tahun ;
                }

                // mencari tagihan berdasarkan siswa,tahun dan bulan tutor 1
                // $tagihan = Tagihan::where('siswa_id', $request->siswa_id)
                // ->whereYear('tanggal_tagihan', $tahun)
                // ->whereMonth('tanggal_tagihan', $bulan)
                // ->first();

                     //cara kedua  agar website tidak berat tutor 157
                    $tagihan =$siswa->tagihan->filter(function ($value) use ($bulan, $tahun){
                        return $value->tanggal_tagihan->year == $tahun && $value->tanggal_tagihan->month ==$bulan;
                    })->first();


                $tanggalBayar = '';
                // jika tagihan tidak kosong dan status tidak baru , berarti sudah bayar, ambil tanggal bayar
                if ($tagihan != null && $tagihan->status !='baru') {
                    $tanggalBayar = $tagihan->pembayaran->first()->tanggal_bayar->format('d F Y ');
                }

                $arrayData[] = [
                    'bulan' => ubahNamaBulan ($bulan),
                    'tahun' => $tahun,
                    'total_tagihan' => $tagihan->total_tagihan ?? 0,
                    'status_tagihan' =>  ($tagihan == null) ?  false:true,
                    'status_pembayaran' =>  ($tagihan == null) ?  'Belum Bayar' : $tagihan->status  ,
                    'tanggal_bayar' => $tanggalBayar,
                ];
            }

        
        if (request ('output')== 'pdf') {
            $pdf = Pdf::loadView('kartuspp_index' ,[
            'kartuSpp' => collect ($arrayData),
            'siswa' => $siswa
        ]);
            $namaFile = "kartu spp" . $siswa->nama. 'tahun' . $request->tahun . '.pdf';
            return $pdf->download($namaFile);        
        }

        
        // $siswa = $tagihan->first()?->siswa;
        return view('kartuspp_index',[
            'kartuSpp' => collect ($arrayData),
            'siswa' => $siswa
        ]);
    }
}
