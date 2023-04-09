<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Settings;

class SettingController extends Controller
{
    public function create ()
    {
        return view('operator.setting_form');
    }

    public function store  (Request $request)
    {
        $dataSettings = $request->except('_token');
        settings()->set($dataSettings);
        flash ('Data Berhasil Disimpan');

        return back();
    }
}
