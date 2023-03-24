<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function index()
    {
        // hanya operator dan admin saja
       
        return view('operator.'. $this->viewIndex, [
        'models' => Siswa::latest() //data terbaru
        ->paginate(50),
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
    public function store(Request $request)
    {
        //|unique:Siswas' agar tidak sama satu sama lain
        $data = $request -> validate ([
            'wali_id' => 'nullable',
            'nama' => 'required',
            'nisn' => 'required|unique:siswas',
            'jurusan' => 'required',
            'kelas' => 'required',
            'angkatan' => 'required',
            'foto' => 'nullable|image|mimes:jpg, jpeg, png| max:3072',
        ]);

        // if ($request->hasFile('foto')){
        //     $data['foto'] = $request->file('foto')->store('public');
        // }

            if ($request -> hasFile('foto')) {
                $foto = $request->file('foto');
                $file_name = time ().'-'. $foto -> getClientOriginalName ();

                $storage = 'uploads/daftar_online/';
                $foto->move ($storage, $file_name);
                $data ['foto'] =$storage .$file_name;
            }else {
                $data ['foto'] = null;
            }

        $data ['wali_status']= 'oke';
        $data ['user_id']= auth()->user()->id;
        Siswa::create ($data);
        flash ('Data Berhasil Disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'model' =>  Siswa::findOrFail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix.'.update', $id],
            'button' => 'UPDATE',
            'routePrefix' => $this->routePrefix,
            'title' => 'Data Wali Murid',
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
        $data = $request -> validate ([
            'name' => 'required',
            'email' => 'required|unique:Siswas,email,'.$id,
            'nohp' => 'required|unique:Siswas,nohp,'.$id,
            'password' => 'nullable',
        ]);

        $model= Siswa::findOrFail($id);
        if ($data ['password']=="") {
            unset ($data ['password']);
        } else {
            $data ['password']= bcrypt($data['password']);
        }
        $model->fill ($data);
        $model->save();
        flash ('Data Berhasil Diubah');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Siswa::where('akses', 'wali')->findOrFail ($id);

        $model->delete();
        flash ('Data Berhasil DiHapus');
        return back();
    }
}
