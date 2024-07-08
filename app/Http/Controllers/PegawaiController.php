<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use buat databse
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // public function index($nama){

    //     return $nama;
    // }

    // //function formulir
    // public function formulir() {

    //     return view('formulir');
    // }

    // // function proses
    // public function proses(Request $request){
    //     $nama = $request->input('nama');
    //     $alamat = $request->input('alamat');
    //     return "Nama : ".$nama.", Alamat: ".$alamat;
    // }

    public function index(){
        // mengambil dta dari table pegawai
        $pegawai = DB::table('pegawai')->get();

        //mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    //function tambah
    public function tambah(){

        //memanggil view tambah
        return view('tambah');
    }

    //function store
    public function store(Request $request){

        //insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        //redirect halaman ke pegawai(index)
        return redirect('/pegawai');
    }

    //method edit data pegawai
    public function edit($id){

        // mengambil data pegawai dengan id yang dipilih

        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        //passing data pegawai yang didapat ke view edit
        return view('edit', ['pegawai' => $pegawai]);
    }

    //method update data pegawai berdasarkan id
    public function update(Request $request){

        //update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        //redirect ke halaman pegawai(index)
        return redirect('/pegawai');
    }

    //method hapus data pegawai berdasarikan id
    public function hapus($id){

        //menghapus data pegawai dengan id
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        //redirect ke halaman pegawai
        return redirect('/pegawai');
    }
}

