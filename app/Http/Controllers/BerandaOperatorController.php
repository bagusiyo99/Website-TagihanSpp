<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BerandaOperatorController extends Controller
{
    function index (){
    $data = [
        'models' => User::get(),



        'content'=> 'home/home/index'
    ];
      return view('operator.beranda_index',$data);
    }


}
