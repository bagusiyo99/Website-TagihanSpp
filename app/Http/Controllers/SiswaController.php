<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Models\Biaya;
use App\Models\User;
use Illuminate\Http\Request;

// perbedaan find dan first first() dapat memudahkan Anda untuk melakukan query database 
// berdasarkan column atau property yang unik seperti ID siswa setiap where selalu first tutorial 77

class SiswaController extends Controller
{
    //agar lebih cepet tutorial Laravel Proyek #9 Refactor UserController
    private $viewIndex ='siswa_index';
    private $viewCreate='siswa_form';
    private $viewEdit ='siswa_form';
    private $viewShow ='siswa_show';
    private $routePrefix ='siswa';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,)
    {
        //pencarian vidio part 21 
        if ( $request->filled('q')) {
            $models = Siswa::search($request->q)->paginate(50);
        } else {
            $models = Siswa::latest()->paginate(50);
        }
        

        return view('operator.'. $this->viewIndex, [
            //pindah keatas
        // 'models' => Siswa::latest() //data terbaru
        // ->paginate(50),

        'models' => $models,
        'routePrefix' => $this->routePrefix,
        'title' => 'Data Siswa',
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
            // 104 part 1
            'listBiaya' => Biaya::has('children')->whereNull('parent_id')->pluck('nama', 'id'),


            'model' => new Siswa(),
            'method' => 'POST',
            'route' => $this->routePrefix.'.store',
            'button' => 'SIMPAN',
            'routePrefix' => $this->routePrefix,
            'title' => 'Tambah Data Siswa',
            'wali' => User::where('akses', 'wali')->pluck('name', 'id')
        ];
        return view('operator.' .$this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiswaRequest $request)
    {
        //|unique:Siswas' agar tidak sama satu sama lain
        $data = $request -> validated ();


        // if ($request->hasFile('foto')){
        //     $data['foto'] = $request->file('foto')->store('public');
        // }

            if ($request -> hasFile('foto')) {
                $foto = $request->file('foto');
                $file_name = time ().'-'. $foto -> getClientOriginalName ();

                $storage = 'uploads/foto/';
                $foto->move ($storage, $file_name);
                $data ['foto'] =$storage .$file_name;
            }else {
                $data ['foto'] = null;
            }

        if ($request->filled('wali_id')) {
            $data ['wali_status']= 'oke';
        }

        
        // $data ['user_id']= auth()->user()->id;
        Siswa::create ($data);
                // $siswa->setStatus('aktif'); tutor 112

        flash ('Data Berhasil Disimpan');
        return redirect()->route('siswa.index');
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
        'model' => Siswa::findOrFail ($id),
        'title' => 'Data Siswa',
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
                        // 104 part 1
            'listBiaya' => Biaya::has('children')->whereNull('parent_id')->pluck('nama', 'id'),
            'model' =>  Siswa::findOrFail($id),
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
    public function update(UpdateSiswaRequest $request, $id)
    {
        $data = $request -> validated ();
        $model= Siswa::findOrFail($id);



          if ($request -> hasFile('foto')) {
            if($model->foto  != null){
                unlink($model->foto);
            }

            $foto = $request->file('foto');
            $file_name = time ().'-'. $foto -> getClientOriginalName ();

            $storage = 'uploads/foto/';
            $foto->move ($storage, $file_name);
            $data ['foto'] =$storage .$file_name;
        }else {
            $data ['foto'] = $model ->foto;
        }
        
        
        if ($request->filled('wali_id')) {
            $data ['wali_status']= 'oke';
        }
        
        // $data ['user_id']= auth()->user()->id;
        
        $model->fill ($data);
        $model->save();
        flash ('Data Berhasil Diubah');
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Siswa::findOrFail ($id);

            if($model->foto != null){
            unlink($model->foto);
                }

        if ($model->tagihan->count() >= 1) {
        flash ('Data tidak bisa DiHapus, karena masih ada tagihan');
        return back();
        }

        $model->delete();
        flash ('Data Berhasil DiHapus');
        return redirect()->route('siswa.index');
    }
}
