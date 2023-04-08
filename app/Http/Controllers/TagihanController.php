<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Biaya;
use App\Models\Siswa;
use App\Models\Tagihan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\TagihanDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTagihanRequest;
use App\Http\Requests\UpdateTagihanRequest;
use App\Notifications\TagihanNotification;
use Illuminate\Support\Facades\Notification;

class TagihanController extends Controller
{
    //agar lebih cepet tutorial Laravel Proyek #9 Refactor UserController
    private $viewIndex ='tagihan_index';
    private $viewCreate='tagihan_form';
    private $viewEdit ='tagihan_form';
    private $viewShow ='tagihan_show';
    private $routePrefix ='tagihan';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //'user','siswa', 'tagihanDetails' (di model tagihan)
        if ($request->filled('bulan') && $request->filled('tahun')) {
            $models = Tagihan::latest()
                        ->whereMonth ('tanggal_tagihan',$request->bulan)
                        ->whereYear ('tanggal_tagihan',$request->tahun)
            ->paginate(50);
        }else {
        $models = Tagihan::latest()->paginate(50);

        }

        return view('operator.'. $this->viewIndex, [
        'models' => $models,
        'routePrefix' => $this->routePrefix,
        'title' => 'Data Tagihan',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $data = [
            'model' => new Tagihan(),
            'method' => 'POST',
            'route' => $this->routePrefix.'.store',
            'button' => 'SIMPAN',
            'routePrefix' => $this->routePrefix,
            'title' => 'Tambah Data Tagihan',
            // 'angkatan' => $siswa->pluck('angkatan', 'angkatan'),
            // 'kelas' => $siswa->pluck('kelas', 'kelas'),
            // 'biaya' => Biaya::get(),
        ];
        return view('operator.' .$this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagihanRequest $request)
    {
        $data = $request -> validated ();
        DB::beginTransaction();

        // $biayaIdArray = $data['biaya_id'];

        //{{-- tutor 106 --}}

        // $siswa = Siswa::query();

        // if ($data ['kelas'] !='') {
        //     $siswa->where('kelas', $data['kelas']);
        // }

        // if ($data ['angkatan'] !='') {
        //     $siswa->where('angkatan', $data['angkatan']);
        // }

        // $siswa = $siswa->get();

        $siswa = Siswa::currentStatus('aktif')->get();
        $wali = User::whereIn ('id', $siswa->pluck('user_id'))->get();
        foreach ($siswa as $itemSiswa) {
            // $biaya = Biaya::whereIn('id', $biayaIdArray)->get();
            //         unset ($data['biaya_id']);
                    $data ['siswa_id'] = $itemSiswa->id;
                    $data ['status'] = 'baru';
                    $tanggalTagihan = Carbon::parse($data['tanggal_tagihan']);
                    $bulanTagihan = $tanggalTagihan->format('m');
                    $tahunTagihan = $tanggalTagihan->format('Y');
                    $cekTagihan = Tagihan::where('siswa_id', $itemSiswa->id)
                        ->whereMonth ('tanggal_tagihan', $bulanTagihan)
                        ->whereYear ('tanggal_tagihan', $tahunTagihan)
                        ->first();
                        
                        if ($cekTagihan == null) {
                            $tagihan= Tagihan::create ($data);

                            Notification::send($tagihan->siswa->wali, new TagihanNotification($tagihan));

                            $biaya = $itemSiswa->biaya->children;
                                foreach ($biaya as  $itemBiaya) {
                                    $detail = TagihanDetail::create([
                                        'tagihan_id' => $tagihan->id,
                                        'nama_biaya' => $itemBiaya->nama,
                                        'jumlah_biaya' => $itemBiaya->jumlah,
                                    ]);
                                }
                        }
        }



        DB::commit();
        flash ('Data Berhasil Disimpan');
        return redirect()->route('tagihan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        auth()->user()->unreadNotifications->where('id', request('id'))->first()?->markAsRead();

        $tagihan = Tagihan::findOrFail($id);
    
        $data ['tagihan'] = $tagihan;
        $data ['siswa'] = $tagihan->siswa;
        $data ['periode'] = Carbon::parse($tagihan->tanggal_tagihan)->translatedformat('F Y');
        $data ['model'] = new Pembayaran();
        return view('operator.'.$this->viewShow, $data);
        
    }

    public function destroy($id)
    {
        $model = Tagihan::findOrFail ($id);


        $model->delete();
        flash ('Data Berhasil DiHapus');
        return redirect()->route('tagihan.index');
    }
}
