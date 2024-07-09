<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model karyawan
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    //membuat method index
    public function index(){

        //memanggil data karyawan
        $karyawan = Karyawan::all();

        //mengambil data karyawan yang pertama
        $karyawan = Karyawan::first();

        //mengambil data karyawan dengan id
        $karyawan = Karyawan::find(1);

        //mengambil data karyawan yang bernama Siska Suartini
        $karyawan = Karyawan::where('nama', 'Siska Suartini')->get();

        //mengambil data karyawan yang id nya lebih besar sama dengan
        $karyawan = Karyawan::where('id', '>=', 10)->get();

        //mengambil data karyawan di namanya ada huruf (sesuaikan)
        $karyawan = Karyawan::where('nama', 'like', '%a%')->get();

        //membuat pagination dengan menampilkan 10 data perhalaman
        $karyawan = Karyawan::paginate(10);

        //mengirim data karyawan ke view karyawan
        return view('karyawan', ['karyawan' => $karyawan]);
    }
}
