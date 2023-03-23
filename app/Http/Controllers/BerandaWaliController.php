<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaWaliController extends Controller
{
    public function index (){
    return view('wali.beranda_index');
    }
}
