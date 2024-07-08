<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuruhController extends Controller
{
    //membuat method input
    public function input()
    {
        return view('input');
    }

    // membuat method proses dan melakukan validasi
    public function proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ]);

        //mengirimkan data ke view proses
        return view('proses', ['data' => $request]);
    }
}
