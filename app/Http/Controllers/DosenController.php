<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() {

        //retrun tanpa menggunakan view
        // return "Hallo, ini adalah method index, di dalam DosenController";

        // passing data dengan view
        $nama = "Laravel";
        $pelajaran = ["Algoritma", "Kalkulus", "Pem. Web", "Pemrograman IOT"];
        return view('biodata', ['nama' => $nama, 'pelajaran' => $pelajaran]);
    }
}
