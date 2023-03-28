<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaliMuridController extends Controller
{
    public function index ()
    {
        $data ['models'] = Auth::user()->siswa;
        return view ('wali.siswa_index', $data);
    }
}
