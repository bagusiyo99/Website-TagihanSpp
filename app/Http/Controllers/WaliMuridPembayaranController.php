<?php

namespace App\Http\Controllers;

use Notification;
use App\Models\Bank;
use App\Models\User;
use App\Models\Tagihan;
use App\Models\WaliBank;
use App\Models\Pembayaran;
use App\Models\BankSekolah;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PembayaranNotification;

class WaliMuridPembayaranController extends Controller
{

        public function index()
    {
        $models = Pembayaran::where('wali_id', auth()->user()->id)
        ->latest()
        ->orderBy('tanggal_konfirmasi', 'desc')
        ->paginate(50);

        $data ['models'] = $models;
        return view ('wali.pembayaran_index', $data);

    }


        public function show(Pembayaran $pembayaran)
    {
        // notifkasi sudah di baca tutor 91
        auth()->user()->unreadNotifications->where('id', request('id'))->first()?->markAsRead();
        return view('wali.pembayaran_show',[
            'model' => $pembayaran,
            'route' => ['pembayaran.update', $pembayaran->id],
        ]);
    }


    public function create (Request $request)
    {
        //findOrfail artinya data tidak ditemukan jika error
        // $data['tagihan']  = Tagihan::where('id', $request->tagihan_id)->first();
        // dipersingkat
        // waliSiswa() sudah tidak di ganti datanya 
        $data['tagihan']  = Tagihan::waliSiswa()->findOrfail($request->tagihan_id);

        // $data['bankSekolah']  = BankSekolah::findOrfail ($request->bank_sekolah_id);

        $data['ListWaliBank']  = WaliBank::where('wali_id',Auth::user()->id)->get()->pluck('nama_bank_full', 'id');
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

        return view ('wali.pembayaran_form', $data);

    }

    public function store (Request $request)
    {

        if ($request->wali_bank_id == '' && $request->nomor_rekening == '') {
        flash('Silahkan Pilih Bank pengirim')->error();
        return back();
        }

            // tutor 89
      if ($request->nama_rekening != '' && $request->nomor_rekening != '') {
        $bankId = $request->bank_id;
        $bank = Bank::findOrfail ($bankId);
        if ($request->filled('simpan_data_rekening')) {
            $requestDataBank = $request->validate ([
                'nama_rekening' => 'required',
                'nomor_rekening' => 'required',
            ]);
            $waliBank = WaliBank::firstOrCreate(
                $requestDataBank,
                [
                    'nama_rekening' => $requestDataBank ['nama_rekening'],
                    'wali_id' => Auth::user()->id,
                    'kode' => $bank->sandi_bank,
                    'nama_bank' => $bank->nama_bank,
                ]
            );
        }
      } else {
        //ambil data wali bank
        $waliBankId = $request->wali_bank_id;
        $waliBank =WaliBank::findOrFail($waliBankId);
        }

        $jumlahDibayar = str_replace('.', '', $request->jumlah_dibayar);
        // tutor 88
            $validasiPembayaran = Pembayaran::where('jumlah_dibayar', $jumlahDibayar)
                        ->where ('tagihan_id', $request->tagihan_id)
                        ->first();
                if ($validasiPembayaran != null) {
                    
        flash('Data Sudah ada, Mohon tunggu konfirmasi validasi dari admin');
        return back();
                }
 // akhir tutor 88

            $request->validate ([
                'tanggal_bayar' => 'required',
                'jumlah_dibayar' => 'required',
                'bukti_bayar' => 'nullable|image|mimes:jpg, jpeg, png| max:3072',
            ]);
        $buktiBayar = $request->file('bukti_bayar')->store('public');

            // if ($request -> hasFile('bukti_bayar')) {
            //     $bukti_bayar = $request->file('bukti_bayar');
            //     $file_name = time ().'-'. $bukti_bayar -> getClientOriginalName ();

            //     $storage = 'uploads/bukti/';
            //     $bukti_bayar->move ($storage, $file_name);
            //     $data ['bukti_bayar'] =$storage .$file_name;
            // }else {
            //     $data ['bukti_bayar'] = null;
            // }

        $dataPembayaran = [
            'bank_sekolah_id' => $request->bank_sekolah_id,
            'wali_bank_id' => $waliBank->id,
            'tagihan_id' => $request->tagihan_id,
            'wali_id' => Auth::user()->id,
            'tanggal_bayar' => $request->tanggal_bayar,
            // 'status_konfirmasi' => 'belum',
            'jumlah_dibayar' => $jumlahDibayar,
            'bukti_bayar' =>$buktiBayar ,
            'metode_pembayaran' => 'transfer',
            'user_id' => 0,
        ];

         // tutor 90 jika data berhasil dan tidak
        // DB::beginTransaction();
        // try {
        // $pembayaran = Pembayaran::create($dataPembayaran);
        // // tutor 87 notifikasi
        // $userOperator = User::where('akses', 'operator')->get();
        // Notification::send($userOperator, new PembayaranNotification($pembayaran));
        // // akhir tutor 87 notifikasi
        // DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollback();
        // flash('Gagal menyimoan data pembayaran,' . $th->getMessage() )->error();
        // return back();
        //     }

        // validasi pembayarn harus lunas di tutor 148
        $tagihan = Tagihan::findOrfail($request->tagihan_id);
        if ($jumlahDibayar >= $tagihan->total_tagihan) {
            DB::beginTransaction();
            try {
                $pembayaran = Pembayaran::create($dataPembayaran);
                $userOperator = User::where('akses', 'operator')->get();
                Notification::send($userOperator, new PembayaranNotification($pembayaran));
                DB::commit();
            } catch (\Throwable $th) {
                    DB::rollback();
                    flash('Gagal menyimoan data pembayaran,' . $th->getMessage() )->error();
                    return back();
            }
        } else {
                flash('Pembayaran Tidak Boleh Kurang dari tagihan');
                return back();       
        }
        




        flash('Pembayaran Berhasil dan akan segera di konfirmasi oleh admin')->success();
        return back();
    }
}
