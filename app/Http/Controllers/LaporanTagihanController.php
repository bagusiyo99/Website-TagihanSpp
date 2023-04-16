<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;

class LaporanTagihanController extends Controller
{
    public function index (Request $request)
    {
        $tagihan = Tagihan::query();
        if ($request->filled('bulan')) {
            $tagihan = $tagihan->whereMonth ('tanggal_tagihan',$request->bulan);
        }

        if ($request->filled('tahun')) {
            $tagihan = $tagihan->whereYear ('tanggal_tagihan',$request->tahun);
        }

        if ($request->filled('status')) {
            $tagihan = $tagihan->where('status',$request->status);
        }

        if ($request->filled('jurusan')) {
            $tagihan = $tagihan->whereHas('siswa', function($q) use ($request) {
                $q->where('jurusan',$request->jurusan );
            });
        }

        if ($request->filled('kelas')) {
            $tagihan = $tagihan->whereHas('siswa', function($q) use ($request) {
                $q->where('kelas',$request->kelas );
            });
        }

        $tagihan = $tagihan->get();
        // $data ['tagihan'] =$tagihan;
        return view('operator.laporantagihan_index', compact('tagihan'));
    }
}
