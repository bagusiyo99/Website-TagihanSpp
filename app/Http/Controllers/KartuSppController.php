<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;

class KartuSppController extends Controller
{
     public function index(Request $request)
    {
        $tagihan = Tagihan::where('siswa_id', $request->siswa_id)
        ->whereYear('tanggal_tagihan', $request->tahun)
        ->get();
        
        $siswa = $tagihan->first()->siswa;
        return view('operator.kartuspp_index',[
            'tagihan' => $tagihan,
            'siswa' => $siswa
        ]);
    }
}
