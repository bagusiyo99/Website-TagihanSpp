<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaliMuridController extends Controller
{
    public function index ()
    {
        $data ['models'] = Auth::user()->siswa;
        return view ('wali.siswa_index', $data);
    }


    //tutor 122
        public function show ($id)
    {
        $data['title'] = 'Data Detail Siswa';
        $data ['model'] = Siswa::where('id',$id)->where('wali_id', Auth::user()->id)->firstOrfail();
        return view ('wali.siswa_show', $data);
    }
}
