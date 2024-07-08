{{--  Menghubungkan dengan view template master  --}}
@extends('master')

{{--  isi bagian judul halaman  --}}
{{--  cara penulisan isi section yang pendek  --}}
@section('judul_halaman', 'Halaman Kontak')

{{--  isi bagian konten  --}}
{{--  cara penulisan isi section yang panjang  --}}

@section('konten')

<p>Ini adalah Halaman Kontak</p>

<table border="1">
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>admin@gmail.com</td>
    </tr>
    <tr>
        <td>Hp</td>
        <td>:</td>
        <td>02154845415454</td>
    </tr>
</table>

@endsection
