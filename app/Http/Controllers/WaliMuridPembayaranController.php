<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BankSekolah;
use App\Models\Pembayaran;
use App\Models\Tagihan;
use Illuminate\Http\Request;


class WaliMuridPembayaranController extends Controller
{
    public function create (Request $request)
    {
        // $data['tagihan']  = Tagihan::where('id', $request->tagihan_id)->first();
        // dipersingkat
        // waliSiswa() sudah tidak di ganti datanya 
        $data['tagihan']  = Tagihan::waliSiswa()->findOrfail($request->tagihan_id);

        // $data['bankSekolah']  = BankSekolah::findOrfail ($request->bank_sekolah_id);
        $data['model' ]= new Pembayaran();
        $data['method'] = 'POST';
        $data['route'] = 'wali.pembayaran.store';
        $data['listBankSekolah'] = BankSekolah::pluck('nama_bank', 'id');
        $data['listBank'] = Bank::pluck('nama_bank', 'id');

        if ($request->bank_sekolah_id != '') {
            $data['bankYangDipilih']  = BankSekolah::findOrfail ($request->bank_sekolah_id);

        }
        $data ['url'] = route ('wali.pembayaran.create',[
            'tagihan_id' => $request->tagihan_id,
        ]);

        return view ('wali.pembayaran_index', $data);

    }
}
