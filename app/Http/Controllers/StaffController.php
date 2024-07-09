<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model staff
use App\Models\Staff;

class StaffController extends Controller
{
    //method index
    public function index(){

        //menampilkan data staff dengan menggunakan all()
        $staff = Staff::all();
        return view('staff', ['staff' => $staff]);
    }

    //method tambah
    public function tambah(){

        //memangggil view tambah
        return view('staff_tambah');
    }

    //method store
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Staff::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        //mengembalikan dengan menggunakan redirect
        return redirect('/staff');
    }

    //method edit
    public function edit ($id){

        $staff = Staff::find($id);

        //memanggil view staff_edit
        return view('staff_edit', ['staff' => $staff]);
    }

    //method update
    public function update($id, Request $request){

        //melakukan validasi
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $staff = Staff::find($id);
        $staff->nama = $request->nama;
        $staff->alamat = $request->alamat;
        $staff->save();

        //mengembalikan ke tampilan staff dengan redirect
        return redirect('/staff');
    }

    //method hapus
    public function hapus($id){

        //mengambl data berdasarkan id
        $staff = Staff::find($id);
        $staff->delete();

        //mengembalikan tampilan setelah menghapus data
        return redirect('/staff');
    }
}
