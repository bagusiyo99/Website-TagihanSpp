<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Http\Requests\StoreTagihanRequest;
use App\Http\Requests\UpdateTagihanRequest;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function index(Request $request,)
    {
        //pencarian vidio part 21 
        if ( $request->filled('q')) {
            $models = Tagihan::with('user')->search($request->q)->paginate(50);
        } else {
            $models = Tagihan::with('user')->latest()->paginate(50);
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
        $data = [
            'model' => new Tagihan(),
            'method' => 'POST',
            'route' => $this->routePrefix.'.store',
            'button' => 'SIMPAN',
            'routePrefix' => $this->routePrefix,
            'title' => 'Tambah Data Tagihan',
            'angkatan' => Siswa::pluck('angkatan', 'angkatan'),
            'kelas' => Siswa::pluck('kelas', 'kelas'),
        ];
        return view('operator.' .$this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //|unique:Siswas' agar tidak sama satu sama lain
        $data = $request -> validate ([
            'nama' => 'required|unique:biayas,nama',
            'jumlah' => 'required',
        ]);

        
        $data ['user_id']= auth()->user()->id;
        Tagihan::create ($data);
        flash ('Data Berhasil Disimpan');
        return redirect()->route('biaya.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('operator.'. $this->viewShow, [
        'model' => Tagihan::findOrFail ($id),
        'title' => 'Data Tagihan',
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = [
            'model' =>  Tagihan::findOrFail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix.'.update', $id],
            'button' => 'UPDATE',
            'routePrefix' => $this->routePrefix,
            'title' => 'Data Wali Murid',
            'wali' => User::where('akses', 'wali')->pluck('name', 'id')
        ];
        return view('operator.'  .$this->viewEdit, $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //unset maksudnya dibuang dari required data
        $model= Tagihan::findOrFail($id);
        $data = $request -> validate ([
            'nama' => 'required',
            'jumlah' => 'required',
        ]);

        
        $data ['user_id']= auth()->user()->id;
        
        $model->fill ($data);
        $model->save();
        flash ('Data Berhasil Diubah');
        return redirect()->route('biaya.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Tagihan::findOrFail ($id);


        $model->delete();
        flash ('Data Berhasil DiHapus');
        return redirect()->route('biaya.index');
    }
}
