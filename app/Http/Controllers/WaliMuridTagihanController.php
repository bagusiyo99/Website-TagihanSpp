<?php

namespace App\Http\Controllers;

use App\Models\BankSekolah;
use App\Models\Tagihan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaliMuridTagihanController extends Controller
{
    public function index ()
    {
        $tagihan = Tagihan::waliSiswa()->latest();
        // $siswaId = Auth::user()->getAllSiswaId();
                // WaliSiswa di model tagihan hal 64 tutor 80
        $data['tagihan'] = $tagihan ->get();
        // $data['tagihan'] = Tagihan::whereIn('siswa_id', $siswaId)->get();
        return view ('wali.tagihan_index', $data);
    }

    public function show ($id)
    {
        // getAllSiswaId terletak use App\Models\User tutor 79
        // $siswaId = Auth::user()->getAllSiswaId();

        // validasi penting tutor 79
        // WaliSiswa di model tagihan hal 64 tutor 80
        $tagihan = Tagihan::WaliSiswa()->findorFail($id);
        // $tagihan = Tagihan::whereIn('siswa_id', $siswaId)->findorFail($id);
        $data ['bankSekolah'] = BankSekolah::all();
        $data['tagihan'] =$tagihan ;
        $data['siswa'] =$tagihan->siswa ;
        return view ('wali.tagihan_show', $data);
    }
}
