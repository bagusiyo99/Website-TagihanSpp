<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function create ()
    {
        return view('operator.setting_form');
    }

    public function store  (Request $request)
    {
        return view('operator.setting_form');
    }
}
