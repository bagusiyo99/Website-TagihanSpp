<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Http\Requests\StoreBankRequest;
use App\Http\Requests\UpdateBankRequest;
use Illuminate\Http\Request;


class BankController extends Controller
{
    //agar lebih cepet tutorial Laravel Proyek #9 Refactor UserController
    private $viewIndex ='listbank_index';
    private $viewCreate='listbank_form';
    private $viewEdit ='listbank_form';
    private $viewShow ='listbank_show';
    private $routePrefix ='listbank';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ( $request->filled('q')) {
            $models = Bank::search($request->q)->paginate(50);
        } else {
            $models = Bank::latest()->paginate(50);
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
            'model' => new Bank(),
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
     * @param  \App\Http\Requests\StoreBankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankRequest $request)
    {
        $data = $request -> validated ();

        
        Bank::create ($data);
        flash ('Data Berhasil Disimpan');
        return redirect()->route('listbank.index');
    }

    public function show($id)
    {
         return view('operator.'. $this->viewShow, [
        'model' => Bank::findOrFail ($id),
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
            'model' =>  Bank::findOrFail($id),
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
    public function update(UpdateBankRequest $request, $id)
    {
        $data = $request -> validated ();
        $model= Bank::findOrFail($id);

        
        $model->fill ($data);
        $model->save();
        flash ('Data Berhasil Diubah');
        return redirect()->route('listbank.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Bank::findOrFail ($id);
        $model->delete();
        flash ('Data Berhasil DiHapus');
        return redirect()->route('listbank.index');
    }
}
