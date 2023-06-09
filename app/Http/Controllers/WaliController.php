<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    //agar lebih cepet tutorial Laravel Proyek #9 Refactor UserController
    private $viewIndex ='wali_index';
    private $viewCreate='user_form';
    private $viewEdit ='user_form';
    private $viewShow ='wali_show';
    private $routePrefix ='wali';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('operator.'. $this->viewIndex, [
        'models' => User::wali()
        ->latest() //data terbaru
        ->paginate(50),
        'routePrefix' => $this->routePrefix,
        'title' => 'Data Wali Murid',
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
            'model' => new User(),
            'method' => 'POST',
            'route' => $this->routePrefix.'.store',
            'button' => 'SIMPAN',
            'routePrefix' => $this->routePrefix,
            'title' => 'Tambah Data Wali Murid',
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
        //|unique:users' agar tidak sama satu sama lain
        $data = $request -> validate ([
            'name' => 'required',
            'email' => 'required|unique:users',
            'nohp' => 'required|unique:users',
            'password' => 'required',
        ]);
        $data ['password']= bcrypt($data['password']);
        $data ['email_verified_at']= now();
        $data ['akses']= 'wali';
        User::create ($data);
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
        $model = User::wali()->where('akses', 'wali')->where('id', $id)->firstOrFail();
        return view ('operator.'  .$this->viewShow, [
            'model' => $model,
            'title' => 'Deatail Data Wali Murid',
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
            'model' =>  User::findOrFail($id),
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
            'email' => 'required|unique:users,email,'.$id,
            'nohp' => 'required|unique:users,nohp,'.$id,
            'password' => 'nullable',
        ]);

        $model= User::findOrFail($id);
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
        $model = User::where('akses', 'wali')->findOrFail ($id);

        $model->delete();
        flash ('Data Berhasil DiHapus');
        return back();
    }
}
