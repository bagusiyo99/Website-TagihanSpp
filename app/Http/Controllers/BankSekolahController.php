<?php

namespace App\Http\Controllers;

use App\Models\BankSekolah;
use App\Http\Requests\StoreBankSekolahRequest;
use App\Http\Requests\UpdateBankSekolahRequest;
use Illuminate\Http\Request;

class BankSekolahController extends Controller
{
    //agar lebih cepet tutorial Laravel Proyek #9 Refactor UserController
    private $viewIndex ='bank_index';
    private $viewCreate='bank_form';
    private $viewEdit ='bank_form';
    private $viewShow ='bank_show';
    private $routePrefix ='bank';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ( $request->filled('q')) {
            $models = BankSekolah::search($request->q)->paginate(50);
        } else {
            $models = BankSekolah::latest()->paginate(50);
        }
                

        return view('operator.'. $this->viewIndex, [

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
            'model' => new BankSekolah(),
            'method' => 'POST',
            'route' => $this->routePrefix.'.store',
            'button' => 'SIMPAN',
            'routePrefix' => $this->routePrefix,
            'title' => 'Tambah Data Siswa',
        ];
        return view('operator.' .$this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankSekolahRequest $request)
    {
        $data = $request -> validated ();

        
        BankSekolah::create ($data);
        flash ('Data Berhasil Disimpan');
        return redirect()->route('bank.index');
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
        'model' => BankSekolah::findOrFail ($id),
        'title' => 'Data bank',
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
            'model' =>  BankSekolah::findOrFail($id),
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
    public function update(UpdateBankSekolahRequest $request, $id)
    {
        $data = $request -> validated ();
        $model= BankSekolah::findOrFail($id);

        
        $model->fill ($data);
        $model->save();
        flash ('Data Berhasil Diubah');
        return redirect()->route('bank.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = BankSekolah::findOrFail ($id);
        $model->delete();
        flash ('Data Berhasil DiHapus');
        return redirect()->route('bank.index');
    }
}