<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class WaliMuridInvoiceController extends Controller
{
    public function show($id)
    {
        $tagihan = Tagihan::waliSiswa()->findOrFail($id);

        if (request ('output')== 'pdf') {
            $data ['tagihan'] =$tagihan;
            $pdf = Pdf::loadView('wali.invoice_pdf', $data);
            $namaFile = "invoice tagihan" .$tagihan->siswa->nama. 'bulan' . $tagihan->tanggal_tagihan->translatedformat(' F Y') . '.pdf';
            return $pdf->download($namaFile);        
        }
        
        $data ['tagihan'] =$tagihan;
        // return view('wali.invoice_show', $data);  
        return view('wali.invoice_pdf', $data);  
    }


}
