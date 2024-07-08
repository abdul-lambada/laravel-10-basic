{{--  Menghubungkan dengan view template master  --}}
@extends('master')

{{--  Isi bagian judul halaman  --}}
{{--  cara penulisan isi section yang pendek  --}}
@section('judul_halaman', 'Halaman_tentang')


{{--  isi bagian konten  --}}
{{--  cara penulisan isi section yang panjang  --}}
@section('konten')

<p>Ini adalah Halaman Tentang</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aspernatur pariatur repudiandae vero cupiditate quia expedita omnis, praesentium, quos corporis nihil dolor, obcaecati perspiciatis itaque? Ipsa autem fugit deleniti! Dolor maxime ducimus obcaecati labore in dolore? Commodi mollitia, soluta labore qui dolores sunt fugit, nisi sequi temporibus minus facere eaque?</p>

@endsection
