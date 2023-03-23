<?php

namespace App\Http\Controllers;

// use App\Models\User as Model;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //agar lebih cepet tutorial Laravel Proyek #9 Refactor UserController
    private $viewIndex ='user_index';
    private $viewCreate='user_form';
    private $viewEdit ='user_form';
    private $viewShow ='user_show';
    private $routePrefix ='user';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hanya operator dan admin saja
       
        return view('operator.'. $this->viewIndex, [
        'models' => User::where('akses', '<>', 'wali')
        ->latest() //data terbaru
        ->paginate(50)
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
            'akses' => 'required|in:operator,admin',
            'password' => 'required',
        ]);
        $data ['password']= bcrypt($data['password']);
        $data ['email_verified_at']= now();
        User::create ($data);
        flash ('Data Berhasil Disimpan');
        return redirect()->route('user.index');
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
            'model' =>  User::findOrFail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix.'.update', $id],
            'button' => 'UPDATE',
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
            'akses' => 'required|in:operator,admin',
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
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::findOrFail ($id);

        if ($model->id== 1){
        flash ('Data tidak bisa DiHapus')->error();
            return back ();
        }
        $model->delete();
        flash ('Data Berhasil DiHapus');
        return redirect()->route('user.index');
    }
}
