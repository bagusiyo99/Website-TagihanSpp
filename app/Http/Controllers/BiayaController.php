<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Http\Requests\StoreBiayaRequest;
use App\Http\Requests\UpdateBiayaRequest;
use App\Models\User;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    //agar lebih cepet tutorial Laravel Proyek #9 Refactor UserController
    private $viewIndex ='biaya_index';
    private $viewCreate='biaya_form';
    private $viewEdit ='biaya_form';
    private $viewShow ='biaya_show';
    private $routePrefix ='biaya';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,)
    {
        //pencarian vidio part 21 
        if ( $request->filled('q')) {
            $models = Biaya::with('user')->search($request->q)->paginate(50);
        } else {
            $models = Biaya::with('user')->latest()->paginate(50);
        }
        

        return view('operator.'. $this->viewIndex, [


        'models' => $models,
        'routePrefix' => $this->routePrefix,
        'title' => 'Data Biaya',
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
            'model' => new Biaya(),
            'method' => 'POST',
            'route' => $this->routePrefix.'.store',
            'button' => 'SIMPAN',
            'routePrefix' => $this->routePrefix,
            'title' => 'Tambah Data Biaya',
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
    public function store(StoreBiayaRequest $request)
    {
        // mengambil validasi di file use App\Http\Requests\StoreBiayaRequest;
        $data = $request -> validated ();

        // $data ['jumlah'] = str_replace('.', '', $data['jumlah'] );
        
        Biaya::create ($data);
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
        'model' => Biaya::findOrFail ($id),
        'title' => 'Data Biaya',
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
            'model' =>  Biaya::findOrFail($id),
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
    public function update(UpdateBiayaRequest $request, $id)
    {
        // mengambil validasi di file use App\Http\Requests\UpdateBiayaRequest;
        $model= Biaya::findOrFail($id);

        $data = $request -> validated ();

        // $data = $request -> validate ([
        //     'nama' => 'required',
        //     'jumlah' => 'required',
        // ]);

        
        // $data ['user_id']= auth()->user()->id;
        
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
        $model = Biaya::findOrFail ($id);


        $model->delete();
        flash ('Data Berhasil DiHapus');
        return redirect()->route('biaya.index');
    }
}
