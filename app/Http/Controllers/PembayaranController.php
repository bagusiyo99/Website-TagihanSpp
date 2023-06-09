<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;
use App\Models\Tagihan;
use App\Notifications\PembayaranKonfirmasiNotification;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Pembayaran::latest()->orderBy('tanggal_konfirmasi', 'desc')->paginate(50);

        $data ['models'] = $models;
        return view ('operator.pembayaran_index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePembayaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembayaranRequest $request)
    {
        $data = $request -> validated ();
        // $data ['status_konfirmasi'] = 'sudah';
        $data ['tanggal_konfirmasi'] = now();
        $data ['metode_pembayaran'] = 'manual';
        $tagihan = Tagihan::findOrfail($data['tagihan_id']);
        $data ['wali_id'] = $tagihan->siswa->wali_id ?? 0;

        // perbaikan tutor 153
        //total_pembayaran di model tagihan tutor 154
        // $totalDibayar = $tagihan->total_pembayaran + $data['jumlah_dibayar'];
        // if ($totalDibayar >= $tagihan->total_tagihan) {
        // // penutup tutor 153

        //     $tagihan->status = 'lunas';
        //     $tagihan->tanggal_lunas = now();
        // }else {
        //     $tagihan->status = 'angsur';
        // }
        // $tagihan->save();
        //SIMPAN PEMBAYARAN
        $pembayaran = Pembayaran::create($data);
        //tutor 156
        $tagihan->updateStatus();
        $wali =  $pembayaran->wali;
        if ($wali != null) {
            $wali->notify(new PembayaranKonfirmasiNotification($pembayaran));
        }
        flash ('Data Berhasil Disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        // notifkasi sudah di baca tutor 91
        auth()->user()->unreadNotifications->where('id', request('id'))->first()?->markAsRead();
        return view('operator.pembayaran_show',[
            'model' => $pembayaran,
            'route' => ['pembayaran.update', $pembayaran->id],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePembayaranRequest  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //tutor 93
        // $pembayaran->status_konfirmasi = 'sudah';

        //tutor 96
        $wali =  $pembayaran->wali;
        $wali->notify(new PembayaranKonfirmasiNotification($pembayaran));
        //akhir tutor 96

        $pembayaran ->tanggal_konfirmasi= now();
        $pembayaran->user_id = auth()->user()->id;
        $pembayaran->save();
        // $pembayaran->tagihan->status ='lunas';
        // $pembayaran->tagihan->tanggal_lunas = $pembayaran->tanggal_bayar;
        // $pembayaran->tagihan->save();

        //tutor 156
        $pembayaran->tagihan->updateStatus();
        flash ('Data Berhasil dikonfirmasi')->success();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //tutor 155
        $tagihan = $pembayaran->tagihan;
        // $sisaPembayaran = $tagihan->total_pembayaran - $pembayaran->jumlah_dibayar;
        // if ($sisaPembayaran < $tagihan->total_tagihan ) {
        //     $tagihan->status = 'angsur';
        //     $tagihan->tanggal_lunas = null;
        //     $tagihan->save();
        //     }

        //tutor 156
       
        $pembayaran->delete();
         $tagihan->updateStatus();
        flash ('Data Berhasil DiHapus');
        return back();
    }
}
