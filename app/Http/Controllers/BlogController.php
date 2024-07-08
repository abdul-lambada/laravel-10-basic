<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //function home
    public function home(){
        return view('home');
    }

    //function tentang
    public function tentang(){
        return view('tentang');
    }

    //function kontak
    public function kontak(){
        return view('kontak');
    }
}
