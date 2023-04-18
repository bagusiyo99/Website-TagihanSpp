<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class LaporanPembayaranController extends Controller
{
    public function index (Request $request)
    {
        $pembayaran = Pembayaran::query();
        if ($request->filled('bulan')) {
            $pembayaran = $pembayaran->whereMonth ('tanggal_bayar',$request->bulan);
        }

        if ($request->filled('tahun')) {
            $pembayaran = $pembayaran->whereYear ('tanggal_bayar',$request->tahun);
        }

        if ($request->filled('tanggal_konfirmasi')) {
            $pembayaran = $pembayaran->where('tanggal_konfirmasi',$request->status);
        }

        if ($request->filled('jurusan')) {
            $pembayaran = $pembayaran->whereHas('siswa', function($q) use ($request) {
                $q->where('jurusan',$request->jurusan );
            });
        }

        if ($request->filled('kelas')) {
            $pembayaran = $pembayaran->whereHas('tagihan', function($q) use ($request) {
                $q->whereHas('siswa', function ($q) use ($request) { 
                    $q->where('kelas',$request->kelas );
                });           
            });
        }

        $pembayaran = $pembayaran->get();
        // $data ['pembayaran'] =$pembayaran;
        return view('operator.laporanpembayaran_index', compact('pembayaran'));
    }
}
