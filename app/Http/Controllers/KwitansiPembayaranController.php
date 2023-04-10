<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KwitansiPembayaranController extends Controller
{
   
    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $data ['pembayaran'] =$pembayaran;
        $data ['title'] = 'Kwitansi Pembayaran No #'.$pembayaran->id;

        if (request ('output')== 'pdf') {
            $pdf = Pdf::loadView('kwitansi-pembayaran', $data);
            $namaFile = "invoice tagihan" .$pembayaran->tagihan->siswa->nama. 'bulan' . $pembayaran->tagihan->tanggal_tagihan->translatedformat(' F Y') . '.pdf';
            return $pdf->download($namaFile);        
        }
        return view('kwitansi-pembayaran', $data);
    }

}
