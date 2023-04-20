<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class LaporanRekapPembayaranController extends Controller
{
  public function index (Request $request)
    {

        $siswa = Siswa::with('tagihan')->orderBy('nama', 'asc');
        if ($request->filled('kelas_id')) {
            $siswa->where ('kelas_id',$request->kelas_id);
        }

        $siswa = $siswa->get();
        foreach ($siswa as $itemSiswa) {
                $dataTagihan = [];
                $tahun =  $request->tahun;
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
                        'tanggal_lunas' => $tagihan->tanggal_lunas ?? '-',
                    ];
                } 
                $dataRekap [] = [
                    'siswa' =>$itemSiswa,
                    'dataTagihan' => $dataTagihan
                ];
        }

        $data['dataRekap'] = $dataRekap;
        $data ['header'] = bulanSPP();
        return view('operator.laporanrekappembayaran_index',$data );
    }}
