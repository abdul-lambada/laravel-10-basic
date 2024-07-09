<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data guru
        $guru = Guru::all();

        //menampilkan data ke view guru
        return view('guru', ['guru' => $guru]);
    }

    //hapus sementara
    public function hapus($id){

        $guru = Guru::find($id);
        $guru->delete();

        //redirect
        return redirect('/guru');

    }

    //menampilkan data guru yang sudah dihapus
    public function trash(){

        //mengambil data guru yang sudah dihapus
        $guru = Guru::onlyTrashed()->get();

        return view('guru_trash', ['guru' => $guru]);
    }

    //kembalikan data gruru yang sudah dihapus
    public function kembalikan($id){

        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->restore();

        return redirect('/guru/trash');
    }

    //kembalikan semua data yan sudah dihapus
    public function kembalikan_semua(){

        $guru = Guru::onlyTrashed();
        $guru->restore();

        return redirect('/guru/trash');
    }

    //hapus permanen data guru yang ada di trash
    public function hapus_permanen($id){

        //hapus permanen data guru
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->forceDelete();

        return redirect('/guru/trash');
    }

    //hapus permanen semua data guru
    public function hapus_permanen_semua(){

        //hapus permanen semua data guru
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();

        return redirect('/guru/trash');
    }
}
