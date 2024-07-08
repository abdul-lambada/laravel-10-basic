<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($nama){

        return $nama;
    }

    //function formulir
    public function formulir() {

        return view('formulir');
    }

    // function proses
    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat: ".$alamat;
    }
}
