<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memangil models pengguna
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        //mengambil semua data pengguna menggunakan all()
        $pengguna = Pengguna::all();

        //return data ke view pengguna
        return view('/pengguna', ['pengguna' => $pengguna]);
    }
}
