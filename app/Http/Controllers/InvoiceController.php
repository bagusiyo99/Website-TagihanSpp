<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function show($id)
    {

        //kondisi jika dia diakses wali maka yang keluar adalah  $tagihan = Tagihan::waliSiswa()->findOrFail($id);
        // jika diakses operator maka  $tagihan = Tagihan::findOrFail($id);  tutor 130
        if (Auth::user()->akses == 'wali') {
        $tagihan = Tagihan::waliSiswa()->findOrFail($id);
        }else {
        $tagihan = Tagihan::findOrFail($id);
        }

        $data ['tagihan'] =$tagihan;
        $data ['title'] = 'Kwitansi Pembayaran No #'.$tagihan->id;


        
        
        
        // return view('wali.invoice_show', $data);  
        return view('invoice_pdf', $data);  
    }


}
